<?php
/**
 * The edit view file of story module of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     story
 * @version     $Id: edit.html.php 4645 2013-04-11 08:32:09Z chencongzhi520@gmail.com $
 * @link        http://www.zentao.net
 */
?>
<?php include './header.html.php';?>
<form class='form-condensed' method='post' enctype='multipart/form-data' target='hiddenwin' id='dataform'>
<div id='titlebar'>
  <div class='heading'>
    <span class='prefix'><?php echo html::icon($lang->icons['story']);?> <strong><?php echo $story->id;?></strong></span>
    <strong><?php echo html::a($this->createLink('story', 'view', "storyID=$story->id"), $story->title);?></strong>
    <small><?php echo html::icon($lang->icons['edit']) . ' ' . $lang->story->edit;?></small>
  </div>
  <div class='actions'>
    <?php echo html::submitButton($lang->save)?>
  </div>
</div>
<div class='row-table'>
  <div class='col-main'>
    <div class='main'>
      <fieldset>
        <legend><?php echo $lang->story->legendSpec;?></legend>
        <div class='article-content'><?php echo $story->spec;?></div>
      </fieldset>
      <fieldset>
        <legend><?php echo $lang->story->verify;?></legend>
        <div class='article-content'><?php echo $story->verify;?></div>
      </fieldset>
      <fieldset class='fieldset-pure'>
        <legend><?php echo $lang->story->comment;?></legend>
        <div class='form-group'>
          <?php echo html::textarea('comment', '', "rows='5' class='form-control'");?>
        </div>
      </fieldset>
      <div id='linkStoriesBOX'><?php echo html::hidden('linkStories', $story->linkStories);?></div>
      <div id='childStoriesBOX'><?php echo html::hidden('childStories', $story->childStories);?></div>
      <div class='actions actions-form'>
        <?php 
        echo html::hidden('lastEditedDate', $story->lastEditedDate);
        echo html::submitButton($lang->save);
        echo html::linkButton($lang->goback, $app->session->storyList ? $app->session->storyList : inlink('view', "storyID=$story->id"));
        ?>
      </div>
      <?php include '../../common/view/action.html.php';?>
    </div>
  </div>
  <div class='col-side'>
    <div class='main main-side'>
      <fieldset>
        <legend><?php echo $lang->story->legendBasicInfo;?></legend>
        <table class='table table-form'>
          <tr>
            <th class='w-80px'><?php echo $lang->story->product;?></th>
            <td>
              <div class='input-group'>
                <?php echo html::select('product', $products, $story->product, "onchange='loadProduct(this.value);' class='form-control chosen'");?>
                <?php if($product->type != 'normal') echo html::select('branch', $branches, $story->branch, "onchange='loadBranch();' class='form-control' style='width:65px'");?>
              </div>
            </td>
          </tr>
          <tr>
            <th><?php echo $lang->story->module;?></th>
            <td>
              <div class='input-group' id='moduleIdBox'>
              <?php
              echo html::select('module', $moduleOptionMenu, $story->module, "class='form-control chosen'");
              if(count($moduleOptionMenu) == 1)
              {
                  echo "<span class='input-group-addon'>";
                  echo html::a($this->createLink('tree', 'browse', "rootID=$story->product&view=story&currentModuleID=0&branch=$story->branch"), $lang->tree->manage, '_blank');
                  echo '&nbsp; ';
                  echo html::a("javascript:loadProductModules($story->product)", $lang->refresh);
                  echo '</span>';
              }
              ?>
              </div>
            </td>
          </tr>
          <tr>
            <th><?php echo $lang->story->plan;?></th>
            <td>
              <div class='input-group' id='planIdBox'>
              <?php $multiple = ($this->session->currentProductType != 'normal' and empty($story->branch)) ? true : false;?>
              <?php echo html::select($multiple ? 'plan[]' : 'plan', $plans, $story->plan, "class='form-control chosen'" . ($multiple ? ' multiple' : ''));
              if(count($plans) == 1) 
              {
                  echo "<span class='input-group-addon'>";
                  echo html::a($this->createLink('productplan', 'create', "productID=$story->product&branch=$story->branch"), $lang->productplan->create, '_blank');
                  echo html::a("javascript:loadProductPlans($story->product)", $lang->refresh);
                  echo '</span>';
              }
              ?>
              </div>
            </td>
          </tr>
          <tr>
            <th><?php echo $lang->story->source;?></th>
            <td><?php echo html::select('source', $lang->story->sourceList, $story->source, 'class=form-control');?></td>
          </tr>
          <tr>
            <th><?php echo $lang->story->status;?></th>
            <td><span class='story-<?php echo $story->status;?>'><?php echo $lang->story->statusList[$story->status];?></span></td>
          </tr>
          <?php if($story->status != 'draft'):?>
          <tr>
            <th><?php echo $lang->story->stage;?></th>
            <td><?php echo html::select('stage', $lang->story->stageList, $story->stage, 'class=form-control');?></td>
          </tr>
          <?php endif;?>
          <tr>
            <th><?php echo $lang->story->pri;?></th>
            <td><?php echo html::select('pri', $lang->story->priList, $story->pri, 'class=form-control');?></td>
          </tr>
          <tr>
            <th><?php echo $lang->story->estimate;?></th>
            <td><?php echo html::input('estimate', $story->estimate, "class='form-control'");?></td>
          </tr>
          <tr>
            <th><?php echo $lang->story->keywords;?></th>
            <td><?php echo html::input('keywords', $story->keywords, 'class=form-control');?></td>
          </tr>
          <tr>
            <th><?php echo $lang->story->mailto;?></th>
            <td><?php echo html::select('mailto[]', $users, str_replace(' ' , '', $story->mailto), "class='form-control' multiple");?></td>
          </tr>
        </table>
      </fieldset>
      <fieldset>
        <legend><?php echo $lang->story->legendLifeTime;?></legend>
        <table class='table table-form'>
          <tr>
            <th class='w-70px'><?php echo $lang->story->openedBy;?></th>
            <td><?php echo $users[$story->openedBy];?></td>
          </tr>
          <tr>
            <th><?php echo $lang->story->assignedTo;?></th>
            <td><?php echo html::select('assignedTo', $users, $story->assignedTo, 'class="form-control chosen"');?></td>
          </tr>
          <?php if($story->reviewedBy):?>
          <tr>
            <th><?php echo $lang->story->reviewedBy;?></th>
            <td><?php echo html::select('reviewedBy[]', $users, str_replace(' ', '', $story->reviewedBy), 'class="form-control chosen" multiple');?></td>
          </tr>
          <?php endif;?>
          <?php if($story->status == 'closed'):?>
          <tr>
            <th><?php echo $lang->story->closedBy;?></th>
            <td><?php echo html::select('closedBy', $users, $story->closedBy, 'class="form-control chosen"');?></td>
          </tr>
          <tr>
            <th><?php echo $lang->story->closedReason;?></th>
            <td><?php echo html::select('closedReason', $lang->story->reasonList, $story->closedReason, 'class="form-control"');?></td>
          </tr>
          <?php endif;?>
        </table>
      </fieldset>

      <fieldset>
        <legend><?php echo $lang->story->legendMisc;?></legend>
        <table class='table table-form'>
          <tr>
            <th class='w-70px'><?php echo $lang->story->duplicateStory;?></th>
            <td><?php echo html::input('duplicateStory', $story->duplicateStory, "class='form-control'");?></td>
          </tr>
          <tr class='text-top'>
            <th><?php echo $lang->story->linkStories;?></th>
            <td id='linkStoriesBox'>
              <ul class='list-unstyled'>
              <?php echo html::a($this->createLink('story', 'linkStory', "storyID=$story->id&type=linkStories&stories=$story->linkStories", '', true), $lang->story->linkStory, '', "data-toggle='modal' data-type='iframe' data-width='85%'");?>
              <?php
              $linkStories = explode(',', $story->linkStories);
              foreach($linkStories as $linkStoryID)
              {
                  if(isset($story->extraStories[$linkStoryID]))
                  {
                      echo '<li>';
                      echo html::a(inlink('view', "storyID=$linkStoryID"), "#$linkStoryID " . $story->extraStories[$linkStoryID]);
                      echo html::a("javascript:deleteLinkedStory($story->id, \"linkStories\", $linkStoryID)", '<i class="icon-remove"></i>', '', "title='{$lang->unlink}' style='float:right'");
                      echo '</li>';
                  }
              }
              ?>
              </ul>
            </td>
          </tr>
          <tr class='text-top'>
            <th><?php echo $lang->story->childStories;?></th>
            <td id='childStoriesBox'>
              <ul class='list-unstyled'>
              <?php echo html::a($this->createLink('story', 'linkStory', "storyID=$story->id&type=childStories&stories=$story->childStories", '', true), $lang->story->linkStory, '', "class='iframe' data-width='85%'");?>
              <?php
              $childStories = explode(',', $story->childStories);
              foreach($childStories as $childStoryID)
              {
                  if(isset($story->extraStories[$childStoryID]))
                  {
                      echo '<li>';
                      echo html::a(inlink('view', "storyID=$childStoryID"), "#$childStoryID" . $story->extraStories[$childStoryID]);
                      echo html::a("javascript:deleteLinkedStory($story->id, \"childStories\", $childStoryID)", '<i class="icon-remove"></i>', '', "title='{$lang->unlink}' style='float:right'");
                      echo '</li>';
                  }
              }
              ?>
              </ul>
            </td>
          </tr>
       </table>
      </fieldset>
    </div>
  </div>
</div>
</form>
<?php include '../../common/view/footer.html.php';?>
