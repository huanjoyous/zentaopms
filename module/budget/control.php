<?php
class budget extends control
{
    public function __construct($module = '', $method = '')
    {
        parent::__construct($module, $method);
        $this->view->program = $this->loadModel('project')->getByID($this->session->program); 
    }

    public function browse($orderBy = 'id_desc', $recTotal = 0, $recPerPage = 20, $pageID = 1)
    {
        $this->app->loadClass('pager', $static = true);
        $pager = pager::init($recTotal, $recPerPage, $pageID);

        $this->view->title      = $this->lang->budget->common . $this->lang->budget->list;
        $this->view->position[] = $this->lang->budget->common . $this->lang->budget->list;
        $this->view->budgets    = $this->budget->getList($orderBy, $pager);
        $this->view->orderBy    = $orderBy;
        $this->view->pager      = $pager;
        $this->view->modules    = $this->loadModel('tree')->getOptionMenu(0, $viewType = 'subject', $startModuleID = 0);
        $this->view->stages     = $this->loadModel('programplan')->getPlanPairsForBudget($this->session->program);
        $this->view->users      = $this->loadModel('user')->getPairs('noclosed|noletter');
        $this->display();
    }

    public function summary()
    {
        $getSubjectStructure = $this->budget->getSubjectStructure();
        $isChildren          = false;
        if(is_array($getSubjectStructure))
        {
            foreach($getSubjectStructure as $subjects)
            {
                if(isset($subjects['hasChild']))
                {
                    $isChildren = true;
                    break;
                }
            }
        }

        $this->view->title            = $this->lang->budget->common . $this->lang->budget->summary;
        $this->view->position[]       = $this->lang->budget->common . $this->lang->budget->summary;
        $this->view->subjectStructure = $getSubjectStructure;
        $this->view->isChildren       = $isChildren;
        $this->view->subjects         = $this->budget->getSubjects();
        $this->view->stages           = $this->budget->getStages();
        $this->view->stagePairs       = $this->loadModel('programplan')->getPlanPairsForBudget($this->session->program);
        $this->view->summary          = $this->budget->getSummary();
        $this->view->modules          = $this->loadModel('tree')->getOptionMenu(0, $viewType = 'subject', $startModuleID = 0);
        $this->display();
    }

    public function create()
    {
        if($_POST)
        {
            $budgetID = $this->budget->create();

            if(dao::isError())
            {    
                $response['result']  = 'fail';
                $response['message'] = dao::getError();
                $this->send($response);
            }

            $this->loadModel('action')->create('budget', $budgetID, 'created');

            $response['result']  = 'success';
            $response['message'] = $this->lang->saveSuccess;
            $response['locate']  = inlink('browse');
            $this->send($response);
        }

        $this->view->title      = $this->lang->budget->create . $this->lang->budget->common;
        $this->view->position[] = $this->lang->budget->create . $this->lang->budget->common;
        $this->view->subjects   = array(0 => '') + $this->budget->getSubjectOption();
        $this->view->stages     = $this->loadModel('programplan')->getPlanPairsForBudget($this->session->program);
        $this->display();
    }

    public function edit($budgetID)
    {
        if($_POST)
        {
            $changes = $this->budget->update($budgetID);

            if(dao::isError())
            {    
                $response['result']  = 'fail';
                $response['message'] = dao::getError();
                $this->send($response);
            }

            if($changes)
            {
                $actionID = $this->loadModel('action')->create('budget', $budgetID, 'edited');
                $this->action->logHistory($actionID, $changes);
            }

            $response['result']  = 'success';
            $response['message'] = $this->lang->saveSuccess;
            $response['locate']  = inlink('browse');
            $this->send($response);
        }

        $this->view->title      = $this->lang->budget->edit . $this->lang->budget->common;
        $this->view->position[] = $this->lang->budget->edit . $this->lang->budget->common;
        $this->view->subjects   = array('' => '') + $this->budget->getSubjectOption();
        $this->view->stages     = $this->loadModel('programplan')->getPlanPairsForBudget($this->session->program);
        $this->view->budget     = $this->budget->getByID($budgetID);
        $this->display();
    }

    public function view($budgetID)
    {
        $this->view->stages     = $this->budget->getStages();
        $this->view->subjects   = $this->budget->getSubjectOption();
        $this->view->stages     = $this->loadModel('programplan')->getPlanPairsForBudget($this->session->program);
        $this->view->budget     = $this->budget->getByID($budgetID);
        $this->view->actions    = $this->loadModel('action')->getList('budget', $budgetID);
        $this->view->users      = $this->loadModel('user')->getPairs('noclosed|noletter');
        $this->display();
    }

    public function delete($budgetID = 0, $confirm = 'no')
    {
        if($confirm == 'no')
        {    
            echo js::confirm($this->lang->budget->confirmDelete, $this->createLink('budget', 'delete', "id=$budgetID&confirm=yes"));            
            exit;
        }    
        else 
        {    
            $this->budget->delete(TABLE_BUDGET, $budgetID);
            die(js::locate(inlink('browse'), 'parent'));
        }
    
    }

    public function batchCreate()
    {
        if($_POST)
        {
            $this->budget->batchCreate();

            if(dao::isError())
            {    
                $response['result']  = 'fail';
                $response['message'] = dao::getError();
                $this->send($response);
            }

            $response['result']  = 'success';
            $response['message'] = $this->lang->saveSuccess;
            $response['locate']  = inlink('browse');
            $this->send($response);
        }

        $this->view->title      = $this->lang->budget->batchCreate . $this->lang->budget->common;
        $this->view->position[] = $this->lang->budget->batchCreate . $this->lang->budget->common;
        $this->view->subjects   = array('' => '') + $this->budget->getSubjectOption();
        $this->view->stages     = $this->loadModel('programplan')->getPlanPairsForBudget($this->session->program);
        $this->display();
    }
}