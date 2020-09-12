<?php
/**
 * The action module ja file of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      admin wangguannan wuhongjie
 * @package     action
 * @version     $Id$
 * @link        http://www.zentao.net
 */
$lang->action->common = 'システムログ';
$lang->action->product = $lang->productCommon;
$lang->action->project = $lang->projectCommon;
$lang->action->objectType = 'オブジェクトタイプ';
$lang->action->objectID = 'オブジェクトID';
$lang->action->objectName = 'オブジェクト名';
$lang->action->actor = '操作者';
$lang->action->action = '動作';
$lang->action->actionID = 'レコードID';
$lang->action->date = '日付';
$lang->action->extra      = '附加值';

$lang->action->trash = 'ごみ箱';
$lang->action->undelete = '復元';
$lang->action->hideOne = '非表示';
$lang->action->hideAll = '全て非表示';
$lang->action->editComment = '備考更新';
$lang->action->create = '備考追加';
$lang->action->comment = '備考';

$lang->action->trashTips = 'ヒント：システムの整合性を保証するために、禅道システムの削除はマーク削除であります。';
$lang->action->textDiff = 'テキストフォーマット';
$lang->action->original = '元のフォーマット';
$lang->action->confirmHideAll = 'これらのレコードを全部非表示してもよろしいですか？';
$lang->action->needEdit = 'ご復元したい%sの名称またはコードが既に存在していますから、編集更新してください。';
$lang->action->historyEdit = '履歴編集を入力してください。';
$lang->action->noDynamic = '活動がありません。';

$lang->action->history = new stdclass();
$lang->action->history->action = '関連ログ';
$lang->action->history->field = 'フィールド';
$lang->action->history->old = '前';
$lang->action->history->new = '今';
$lang->action->history->diff = '違い';

$lang->action->dynamic = new stdclass();
$lang->action->dynamic->today = '今日';
$lang->action->dynamic->yesterday = '昨日';
$lang->action->dynamic->twoDaysAgo = '一昨日';
$lang->action->dynamic->thisWeek = '今週';
$lang->action->dynamic->lastWeek = '先週';
$lang->action->dynamic->thisMonth = '今月';
$lang->action->dynamic->lastMonth = '先月';
$lang->action->dynamic->all = '全て';
$lang->action->dynamic->hidden = '非表示済';
$lang->action->dynamic->search = '検索';

$lang->action->periods['all'] = $lang->action->dynamic->all;
$lang->action->periods['today'] = $lang->action->dynamic->today;
$lang->action->periods['yesterday'] = $lang->action->dynamic->yesterday;
$lang->action->periods['thisweek'] = $lang->action->dynamic->thisWeek;
$lang->action->periods['lastweek'] = $lang->action->dynamic->lastWeek;
$lang->action->periods['thismonth'] = $lang->action->dynamic->thisMonth;
$lang->action->periods['lastmonth'] = $lang->action->dynamic->lastMonth;

$lang->action->objectTypes['product'] = $lang->productCommon;
$lang->action->objectTypes['story'] = $lang->storyCommon;
$lang->action->objectTypes['productplan'] = 'プラン';
$lang->action->objectTypes['release'] = 'リリース';
$lang->action->objectTypes['project'] = $lang->projectCommon;
$lang->action->objectTypes['task'] = 'タスク';
$lang->action->objectTypes['build'] = 'ビルド';
$lang->action->objectTypes['bug'] = 'バグ';
$lang->action->objectTypes['case'] = 'ケース';
$lang->action->objectTypes['caseresult'] = 'ケース結果';
$lang->action->objectTypes['stepresult'] = 'ケースステップ';
$lang->action->objectTypes['testtask'] = 'テストタスク';
$lang->action->objectTypes['user'] = 'ユーザ';
$lang->action->objectTypes['doc'] = '資料';
$lang->action->objectTypes['doclib'] = '資料ライブラリ';
$lang->action->objectTypes['todo'] = 'ToDo';
$lang->action->objectTypes['branch'] = 'ブランチ';
$lang->action->objectTypes['module'] = 'モジュール';
$lang->action->objectTypes['testsuite'] = 'スイート';
$lang->action->objectTypes['caselib'] = 'ケースライブラリ';
$lang->action->objectTypes['testreport'] = '報告';
$lang->action->objectTypes['entry'] = '適用';
$lang->action->objectTypes['webhook'] = 'Webhook';

/* 用来描述操作历史记录。*/
$lang->action->desc = new stdclass();
$lang->action->desc->common = '$date、 <strong>$action</strong> by <strong>$actor</strong>。' . "\n";
$lang->action->desc->extra = '$date、 <strong>$action</strong> as <strong>$extra</strong> by <strong>$actor</strong>。' . "\n";
$lang->action->desc->opened = '$date、 <strong>$actor</strong> より作成しました。';
$lang->action->desc->created = '$date、 <strong>$actor</strong> より作成しました。';
$lang->action->desc->changed = '$date、 <strong>$actor</strong> より更新しました。';
$lang->action->desc->edited = '$date、 <strong>$actor</strong> より編集しました。' ;
$lang->action->desc->assigned = '$date、 <strong>$actor</strong> より <strong>$extra</strong> にアサインします。';
$lang->action->desc->closed = '$date、 <strong>$actor</strong> よりクローズしました。' . "\n";
$lang->action->desc->deleted = '$date、 <strong>$actor</strong> より削除しました。' . "\n";
$lang->action->desc->deletedfile = '$date、 <strong>$actor</strong> より添付ファイル： <strong><i>$extra</i></strong> を削除しました。' . "\n";
$lang->action->desc->editfile = '$date、 <strong>$actor</strong> より添付ファイル： <strong><i>$extra</i></strong> を編集しました。' . "\n";
$lang->action->desc->erased = '$date、 <strong>$actor</strong> より削除しました。' . "\n";
$lang->action->desc->undeleted = '$date、 <strong>$actor</strong> より復元しました。' . "\n";
$lang->action->desc->hidden = '$date、 <strong>$actor</strong> より非表示しました。' . "\n";
$lang->action->desc->commented = '$date、 <strong>$actor</strong> より備考を追加しました。' . "\n";
$lang->action->desc->activated = '$date、 <strong>$actor</strong> よりアクティベーションしました。' . "\n";
$lang->action->desc->blocked = '$date、 <strong>$actor</strong> よりブロックしました。' . "\n";
$lang->action->desc->moved = '$date、 <strong>$actor</strong> より移動しました。前のは "$extra"。' . "\n";
$lang->action->desc->confirmed = '$date、 <strong>$actor</strong> より' . $lang->storyCommon . 'の変更を確認しました。最新のバージョンは<strong>#$extra</strong>。' . "\n";
$lang->action->desc->caseconfirmed = '$date、 <strong>$actor</strong> よりケースの変更を確認しました。最新バージョンは<strong>#$extra</strong>。' . "\n";
$lang->action->desc->bugconfirmed = '$date、 <strong>$actor</strong> よりバグを確認しました。' . "\n";
$lang->action->desc->frombug = '$date、 <strong>$actor</strong> よりバグから転化しました、バグ番号は <strong>$extra</strong>。';
$lang->action->desc->started = '$date、 <strong>$actor</strong> より起動しました。' . "\n";
$lang->action->desc->restarted = '$date、 <strong>$actor</strong> より続きました。' . "\n";
$lang->action->desc->delayed = '$date、 <strong>$actor</strong> より延期しました。' . "\n";
$lang->action->desc->suspended = '$date、 <strong>$actor</strong> よりサスペンドしました。' . "\n";
$lang->action->desc->recordestimate = '$date、 <strong>$actor</strong> より時間を記録しました。消耗 <strong>$extra</strong> 時間。';
$lang->action->desc->editestimate = '$date、 <strong>$actor</strong> より時間を編集しました。';
$lang->action->desc->deleteestimate = '$date、 <strong>$actor</strong> より時間を削除しました。';
$lang->action->desc->canceled = '$date、 <strong>$actor</strong> よりキャンセルしました。' . "\n";
$lang->action->desc->svncommited = '$date、 <strong>$actor</strong> よりコードを提出しました。バージョンは<strong>#$extra</strong>。' . "\n";
$lang->action->desc->gitcommited = '$date、 <strong>$actor</strong> よりコードを提出しました。バージョンは<strong>#$extra</strong>。' . "\n";
$lang->action->desc->finished = '$date、 <strong>$actor</strong> より終了しました。' . "\n";
$lang->action->desc->paused = '$date、 <strong>$actor</strong> より一時停止しました。' . "\n";
$lang->action->desc->verified = '$date、 <strong>$actor</strong> より検収しました。' . "\n";
$lang->action->desc->diff1 = '<strong><i>%s</i></strong> が更新されました。前は "%s"、今は "%s"。<br />' . "\n";
$lang->action->desc->diff2 = '<strong><i>%s</i></strong> が更新されました。その違いは：' . "\n" . "<blockquote class='textdiff'>%s</blockquote>" . "n<blockquote class='original'>%s</blockquote>";
$lang->action->desc->diff3 = 'ファイル名 %s を %s に変えました。' . "\n";
$lang->action->desc->linked2bug = '$date、 <strong>$actor</strong> よりバージョン <strong>$extra</strong> を関連付けました';

/* 用来描述和父子任务相关的操作历史记录。*/
$lang->action->desc->createchildren = '$date、 <strong>$actor</strong> よりサブタスク <strong>$extra</strong> を作成しました。';
$lang->action->desc->linkchildtask = '$date、 <strong>$actor</strong> よりサブタスク <strong>$extra</strong> を関連付けました。';
$lang->action->desc->unlinkchildrentask = '$date、 <strong>$actor</strong> よりサブタスク <strong>$extra</strong> を除去しました。';
$lang->action->desc->linkparenttask = '$date、 <strong>$actor</strong> より親タスク <strong>$extra</strong> を関連付けました。';
$lang->action->desc->unlinkparenttask = '$date、 <strong>$actor</strong> より親タスク <strong>$extra</strong> から関連を解除しました。';
$lang->action->desc->deletechildrentask = '$date, 由 <strong>$actor</strong> 删除子任务<strong>$extra</strong>。' . "\n";

/* 用来描述和父子需求相关的操作历史记录。*/
$lang->action->desc->createchildrenstory = '$date, 由 <strong>$actor</strong> 创建子需求 <strong>$extra</strong>。' . "\n";
$lang->action->desc->linkchildstory      = '$date, 由 <strong>$actor</strong> 关联子需求 <strong>$extra</strong>。' . "\n";
$lang->action->desc->unlinkchildrenstory = '$date, 由 <strong>$actor</strong> 移除子需求 <strong>$extra</strong>。' . "\n";
$lang->action->desc->linkparentstory     = '$date, 由 <strong>$actor</strong> 关联到父需求 <strong>$extra</strong>。' . "\n";
$lang->action->desc->unlinkparentstory   = '$date, 由 <strong>$actor</strong> 从父需求<strong>$extra</strong>取消关联。' . "\n";
$lang->action->desc->deletechildrenstory = '$date, 由 <strong>$actor</strong> 删除子需求<strong>$extra</strong>。' . "\n";

/* 关联用例和移除用例时的历史操作记录。*/
$lang->action->desc->linkrelatedcase = '$date、 <strong>$actor</strong> よりケース <strong>$extra</strong> を関連付けました。';
$lang->action->desc->unlinkrelatedcase = '$date、 <strong>$actor</strong> より関連ケース <strong>$extra</strong> を除去しました。';

/* 用来显示动态信息。*/
$lang->action->label = new stdclass();
$lang->action->label->created = '作成';
$lang->action->label->opened = '作成';
$lang->action->label->changed = '変更済';
$lang->action->label->edited = '編集';
$lang->action->label->assigned = 'アサイン';
$lang->action->label->closed = 'クローズ';
$lang->action->label->deleted = '削除';
$lang->action->label->deletedfile = '添付ファイル削除';
$lang->action->label->editfile = '添付ファイル編集';
$lang->action->label->erased = '削除';
$lang->action->label->undeleted = '復元';
$lang->action->label->hidden = '非表示';
$lang->action->label->commented = 'コメント';
$lang->action->label->activated = 'アクティベーション';
$lang->action->label->blocked = 'ブロック';
$lang->action->label->resolved = '処理';
$lang->action->label->reviewed = 'レビュー';
$lang->action->label->moved = '移動';
$lang->action->label->confirmed = $lang->storyCommon . '確認';
$lang->action->label->bugconfirmed = '確認';
$lang->action->label->tostory = $lang->storyCommon;
$lang->action->label->frombug = $lang->storyCommon;
$lang->action->label->fromlib = 'ケースライブラリからインポート';
$lang->action->label->totask = 'タスクに変更';
$lang->action->label->svncommited = 'コード提出';
$lang->action->label->gitcommited = 'コード提出';
$lang->action->label->linked2plan = 'プランを関連付け';
$lang->action->label->unlinkedfromplan = 'プラン削除';
$lang->action->label->changestatus = 'ステータス更新';
$lang->action->label->marked = '編集';
$lang->action->label->linked2project = "{$lang->projectCommon}を関連付けた";
$lang->action->label->unlinkedfromproject = "{$lang->projectCommon}除去";
$lang->action->label->unlinkedfrombuild = 'バージョン除去';
$lang->action->label->linked2release = 'リリースを関連付け';
$lang->action->label->unlinkedfromrelease = 'リリースを除去';
$lang->action->label->linkrelatedbug = 'バグを関連付けた';
$lang->action->label->unlinkrelatedbug = '関連バグを除去した';
$lang->action->label->linkrelatedcase = 'ケースを関連付けた';
$lang->action->label->unlinkrelatedcase = '関連ケースを除去した';
$lang->action->label->linkrelatedstory = $lang->storyCommon . 'を関連付けた';
$lang->action->label->unlinkrelatedstory = "関連{$lang->storyCommon}を除去した";
$lang->action->label->subdividestory = $lang->storyCommon . 'を細分した';
$lang->action->label->unlinkchildstory = "細分{$lang->storyCommon}を除去した";
$lang->action->label->started = '開始';
$lang->action->label->restarted = '続く';
$lang->action->label->recordestimate = '時間を記録した';
$lang->action->label->editestimate = '時間を編集した';
$lang->action->label->canceled = 'キャンセル';
$lang->action->label->finished = '完了';
$lang->action->label->paused = '一時停止';
$lang->action->label->verified = '検収';
$lang->action->label->delayed = '延期';
$lang->action->label->suspended = 'サスペンド';
$lang->action->label->login = 'ログイン';
$lang->action->label->logout = 'ログアウト';
$lang->action->label->deleteestimate = '時間を削除した';
$lang->action->label->linked2build = '関連付けた';
$lang->action->label->linked2bug = '関連付けた';
$lang->action->label->linkchildtask = '子タスクを関連付けた';
$lang->action->label->unlinkchildrentask = '関連付けた子タスクを解除する';
$lang->action->label->linkparenttask = '親タスクを関連付けた';
$lang->action->label->unlinkparenttask = '親タスクから関連を解除する';
$lang->action->label->batchcreate = 'タスク一括作成';
$lang->action->label->createchildren = '子タスク作成';
$lang->action->label->managed = '保守';
$lang->action->label->deletechildrentask  = "删除子任务";
$lang->action->label->createchildrenstory = "创建子需求";
$lang->action->label->linkchildstory      = "关联子需求";
$lang->action->label->unlinkchildrenstory = "取消关联子需求";
$lang->action->label->linkparentstory     = "关联到父需求";
$lang->action->label->unlinkparentstory   = "从父需求取消关联";
$lang->action->label->deletechildrenstory = "删除子需求";

/* 动态信息按照对象分组 */
$lang->action->dynamicAction = new stdclass();
$lang->action->dynamicAction->todo['opened'] = 'ToDo作成';
$lang->action->dynamicAction->todo['edited'] = 'ToDo編集';
$lang->action->dynamicAction->todo['erased'] = 'ToDo削除';
$lang->action->dynamicAction->todo['finished'] = 'ToDo完了';
$lang->action->dynamicAction->todo['activated'] = 'ToDoアクティベーション';
$lang->action->dynamicAction->todo['closed'] = 'ToDoクローズ';
$lang->action->dynamicAction->todo['assigned'] = 'ToDoをアサイン';
$lang->action->dynamicAction->todo['undeleted'] = 'ToDo復元';
$lang->action->dynamicAction->todo['hidden'] = 'ToDo非表示';

$lang->action->dynamicAction->product['opened'] = '作成' . $lang->productCommon;
$lang->action->dynamicAction->product['edited'] = '編集' . $lang->productCommon;
$lang->action->dynamicAction->product['deleted'] = '削除' . $lang->productCommon;
$lang->action->dynamicAction->product['closed'] = 'クローズ' . $lang->productCommon;
$lang->action->dynamicAction->product['undeleted'] = '復元' . $lang->productCommon;
$lang->action->dynamicAction->product['hidden'] = '非表示' . $lang->productCommon;
$lang->action->dynamicAction->productplan['opened'] = 'プラン作成';
$lang->action->dynamicAction->productplan['edited'] = 'プラン編集';
$lang->action->dynamicAction->release['opened'] = 'リリース作成';
$lang->action->dynamicAction->release['edited'] = 'リリース編集';
$lang->action->dynamicAction->release['changestatus'] = 'リリースのステータス更新';
$lang->action->dynamicAction->release['undeleted'] = '復元';
$lang->action->dynamicAction->release['hidden'] = '非表示';
$lang->action->dynamicAction->story['opened'] = '作成';
$lang->action->dynamicAction->story['edited'] = '編集';
$lang->action->dynamicAction->story['activated'] = 'アクティベーション';
$lang->action->dynamicAction->story['reviewed'] = 'レビュー';
$lang->action->dynamicAction->story['closed'] = 'クローズ';
$lang->action->dynamicAction->story['assigned'] = 'アサイン';
$lang->action->dynamicAction->story['changed'] = $lang->storyCommon . '変更';
$lang->action->dynamicAction->story['linked2plan'] = $lang->storyCommon . 'とプランを関連付け';
$lang->action->dynamicAction->story['unlinkedfromplan'] = "プランから{$lang->storyCommon}を除去";
$lang->action->dynamicAction->story['linked2release'] = $lang->storyCommon . 'とリリースを関連付け';
$lang->action->dynamicAction->story['unlinkedfromrelease'] = "リリースから{$lang->storyCommon}を除去";
$lang->action->dynamicAction->story['linked2build'] = $lang->storyCommon . 'とバージョンを関連付け';
$lang->action->dynamicAction->story['unlinkedfrombuild'] = "バージョンから{$lang->storyCommon}を除去";
$lang->action->dynamicAction->story['unlinkedfromproject'] = 'プロジェクト除去';
$lang->action->dynamicAction->story['undeleted'] = '復元';
$lang->action->dynamicAction->story['hidden'] = '非表示';

$lang->action->dynamicAction->project['opened'] =  $lang->projectCommon . '作成';
$lang->action->dynamicAction->project['edited'] =  $lang->projectCommon . '編集';
$lang->action->dynamicAction->project['deleted'] = $lang->projectCommon . '削除';
$lang->action->dynamicAction->project['started'] = $lang->projectCommon . '開始';
$lang->action->dynamicAction->project['delayed'] = '延期' . $lang->projectCommon;
$lang->action->dynamicAction->project['suspended'] = 'サスペンド' . $lang->projectCommon;
$lang->action->dynamicAction->project['activated'] = 'アクティベーション' . $lang->projectCommon;
$lang->action->dynamicAction->project['closed'] = 'クローズ' . $lang->projectCommon;
$lang->action->dynamicAction->project['managed'] = '保守' . $lang->projectCommon;
$lang->action->dynamicAction->project['undeleted'] = '復元' . $lang->projectCommon;
$lang->action->dynamicAction->project['hidden'] = '非表示' . $lang->projectCommon;
$lang->action->dynamicAction->project['moved'] = 'タスクインポート';
$lang->action->dynamicAction->task['opened'] = 'タスク作成';
$lang->action->dynamicAction->task['edited'] = 'タスク編集';
$lang->action->dynamicAction->task['commented'] = 'タスク備考';
$lang->action->dynamicAction->task['assigned'] = 'タスクをアサイン';
$lang->action->dynamicAction->task['confirmed'] = $lang->storyCommon . '変更確認';
$lang->action->dynamicAction->task['started'] = 'タスク開始';
$lang->action->dynamicAction->task['finished'] = 'タスク完了';
$lang->action->dynamicAction->task['recordestimate'] = '時間レコード';
$lang->action->dynamicAction->task['editestimate'] = '時間編集';
$lang->action->dynamicAction->task['deleteestimate'] = '時間削除';
$lang->action->dynamicAction->task['paused'] = 'タスク一時停止';
$lang->action->dynamicAction->task['closed'] = 'タスククローズ';
$lang->action->dynamicAction->task['canceled'] = 'タスクキャンセル';
$lang->action->dynamicAction->task['activated'] = 'タスクアクティベーション';
$lang->action->dynamicAction->task['createchildren'] = 'サブタスク作成';
$lang->action->dynamicAction->task['unlinkparenttask'] = '親タスクから関連を解除する';
$lang->action->dynamicAction->task['deletechildrentask']   = '删除子任务';
$lang->action->dynamicAction->task['linkparenttask'] = '親タスクを関連付けた';
$lang->action->dynamicAction->task['linkchildtask'] = 'サブタスクを関連付けた';
$lang->action->dynamicAction->task['createchildrenstory']  = '创建子需求';
$lang->action->dynamicAction->task['unlinkparentstory']    = '从父需求取消关联';
$lang->action->dynamicAction->task['deletechildrenstory']  = '删除子需求';
$lang->action->dynamicAction->task['linkparentstory']      = '关联到父需求';
$lang->action->dynamicAction->task['linkchildstory']       = '关联子需求';
$lang->action->dynamicAction->task['undeleted'] = 'タスク復元';
$lang->action->dynamicAction->task['hidden'] = 'タスク非表示';
$lang->action->dynamicAction->task['svncommited'] = 'SVN提出';
$lang->action->dynamicAction->task['gitcommited'] = 'GIT提出';
$lang->action->dynamicAction->build['opened'] = 'バージョン作成';
$lang->action->dynamicAction->build['edited'] = 'バージョン編集';

$lang->action->dynamicAction->bug['opened'] = 'バグ作成';
$lang->action->dynamicAction->bug['edited'] = 'バグ編集';
$lang->action->dynamicAction->bug['activated'] = 'バグアクティベーション';
$lang->action->dynamicAction->bug['assigned'] = 'バグをアサイン';
$lang->action->dynamicAction->bug['closed'] = 'バグクローズ';
$lang->action->dynamicAction->bug['bugconfirmed'] = 'バグ確認';
$lang->action->dynamicAction->bug['resolved'] = 'バグ処理';
$lang->action->dynamicAction->bug['undeleted'] = 'バグ復元';
$lang->action->dynamicAction->bug['hidden'] = 'バグ非表示';
$lang->action->dynamicAction->bug['deleted']               = '删除Bug';
$lang->action->dynamicAction->bug['confirmed'] = $lang->storyCommon . '変更確認';
$lang->action->dynamicAction->bug['tostory'] = $lang->storyCommon;
$lang->action->dynamicAction->bug['totask'] = 'タスクに変更';
$lang->action->dynamicAction->bug['linked2plan'] = 'バグとプランを関連付け';
$lang->action->dynamicAction->bug['unlinkedfromplan'] = 'プランからバグを除去';
$lang->action->dynamicAction->bug['linked2release'] = 'バグとリリースを関連付け';
$lang->action->dynamicAction->bug['unlinkedfromrelease'] = 'リリースからバグを除去';
$lang->action->dynamicAction->bug['linked2bug'] = 'バグとバージョンを関連付け';
$lang->action->dynamicAction->bug['unlinkedfrombuild'] = 'バージョンからバグを除去';
$lang->action->dynamicAction->testtask['opened'] = 'テストタスク作成';
$lang->action->dynamicAction->testtask['edited'] = 'テストタスク編集';
$lang->action->dynamicAction->testtask['started'] = 'テストタスク起動';
$lang->action->dynamicAction->testtask['activated'] = 'テストタスクアクティベーション';
$lang->action->dynamicAction->testtask['closed'] = 'テストタスク完了';
$lang->action->dynamicAction->testtask['blocked'] = 'テストタスクブロック';
$lang->action->dynamicAction->case['opened'] = 'ケース作成';
$lang->action->dynamicAction->case['edited'] = 'ケース編集';
$lang->action->dynamicAction->case['deleted'] = 'ケース削除';
$lang->action->dynamicAction->case['undeleted'] = 'ケース復元';
$lang->action->dynamicAction->case['hidden'] = 'ケース非表示';
$lang->action->dynamicAction->case['reviewed'] = 'ケースレビュー';
$lang->action->dynamicAction->case['confirmed'] = $lang->storyCommon . '変更確認';
$lang->action->dynamicAction->case['fromlib'] = 'ケースライブラリからインポート';
$lang->action->dynamicAction->testreport['opened'] = 'テストレポート作成';
$lang->action->dynamicAction->testreport['edited'] = 'テストレポート編集';
$lang->action->dynamicAction->testreport['deleted'] = 'テストレポート削除';
$lang->action->dynamicAction->testreport['undeleted'] = 'テストレポート復元';
$lang->action->dynamicAction->testreport['hidden'] = 'テストレポート非表示';
$lang->action->dynamicAction->testsuite['opened'] = 'テストスイート作成';
$lang->action->dynamicAction->testsuite['edited'] = 'テストスイート編集';
$lang->action->dynamicAction->testsuite['deleted'] = 'テストスイート削除';
$lang->action->dynamicAction->testsuite['undeleted'] = 'テストスイート復元';
$lang->action->dynamicAction->testsuite['hidden'] = 'テストスイート非表示';
$lang->action->dynamicAction->caselib['opened'] = 'ケースライブラリ作成';
$lang->action->dynamicAction->caselib['edited'] = 'ケースライブラリ編集';
$lang->action->dynamicAction->caselib['deleted'] = 'ケースライブラリ削除';
$lang->action->dynamicAction->caselib['undeleted'] = 'ケースライブラリ復元';
$lang->action->dynamicAction->caselib['hidden'] = 'ケースライブラリ非表示';

$lang->action->dynamicAction->doclib['created'] = 'ドキュメントライブラリ作成';
$lang->action->dynamicAction->doclib['edited'] = 'ドキュメントライブラリ編集';
$lang->action->dynamicAction->doc['created'] = 'ドキュメント作成';
$lang->action->dynamicAction->doc['edited'] = 'ドキュメント編集';
$lang->action->dynamicAction->doc['commented'] = '備考ドキュメント';
$lang->action->dynamicAction->doc['deleted'] = 'ドキュメント削除';
$lang->action->dynamicAction->doc['undeleted'] = 'ドキュメント復元';
$lang->action->dynamicAction->doc['hidden'] = 'ドキュメント非表示';

$lang->action->dynamicAction->user['created'] = 'ユーザ作成';
$lang->action->dynamicAction->user['edited'] = 'ユーザ編集';
$lang->action->dynamicAction->user['login'] = 'ユーザログイン';
$lang->action->dynamicAction->user['logout'] = 'ユーザログアウト';
$lang->action->dynamicAction->user['undeleted'] = 'ユーザ復元';
$lang->action->dynamicAction->user['hidden'] = 'ユーザ非表示';
$lang->action->dynamicAction->user['loginxuanxuan'] = 'クライアントログイン';

$lang->action->dynamicAction->entry['created'] = 'アプリケーション追加';
$lang->action->dynamicAction->entry['edited'] = 'アプリケーション編集';

/* 用来生成相应对象的链接。*/
$lang->action->label->product = $lang->productCommon . '|product|view|productID=%s';
$lang->action->label->productplan = 'プラン|productplan|view|productID=%s';
$lang->action->label->release = 'リリース|release|view|productID=%s';
$lang->action->label->story = $lang->storyCommon . '|story|view|storyID=%s';
$lang->action->label->project = "{$lang->projectCommon}|project|view|projectID=%s";
$lang->action->label->task = 'タスク|task|view|taskID=%s';
$lang->action->label->build = 'バージョン|build|view|buildID=%s';
$lang->action->label->bug = 'バグ|bug|view|bugID=%s';
$lang->action->label->case = 'ケース|testcase|view|caseID=%s';
$lang->action->label->testtask = 'テストタスク|testtask|view|caseID=%s';
$lang->action->label->testsuite = 'テストスイート|testsuite|view|suiteID=%s';
$lang->action->label->caselib = 'ケースライブラリ|testsuite|libview|libID=%s';
$lang->action->label->todo = 'ToDo|todo|view|todoID=%s';
$lang->action->label->doclib = 'ドキュメントライブラリ|doc|browse|libID=%s';
$lang->action->label->doc = 'ドキュメント|doc|view|docID=%s';
$lang->action->label->user = 'ユーザ|user|view|account=%s';
$lang->action->label->testreport = 'レポート|testreport|view|report=%s';
$lang->action->label->entry = 'アプリケーション|entry|browse|';
$lang->action->label->webhook = 'Webhook|webhook|browse|';
$lang->action->label->space = ' ';

/* Object type. */
$lang->action->search->objectTypeList[''] = '';
$lang->action->search->objectTypeList['product'] = $lang->productCommon;
$lang->action->search->objectTypeList['project'] = $lang->projectCommon;
$lang->action->search->objectTypeList['bug'] = 'バグ';
$lang->action->search->objectTypeList['case'] = 'ケース';
$lang->action->search->objectTypeList['caseresult'] = 'ケース結果';
$lang->action->search->objectTypeList['stepresult'] = 'ケースステップ';
$lang->action->search->objectTypeList['story'] = $lang->storyCommon;
$lang->action->search->objectTypeList['task'] = 'タスク';
$lang->action->search->objectTypeList['testtask'] = 'テストタスク';
$lang->action->search->objectTypeList['user'] = 'ユーザ';
$lang->action->search->objectTypeList['doc'] = 'ドキュメント';
$lang->action->search->objectTypeList['doclib'] = 'ドキュメントライブラリ';
$lang->action->search->objectTypeList['todo'] = 'ToDo';
$lang->action->search->objectTypeList['build'] = 'バージョン';
$lang->action->search->objectTypeList['release'] = 'リリース';
$lang->action->search->objectTypeList['productplan'] = 'プラン';
$lang->action->search->objectTypeList['branch'] = 'ブランチ';
$lang->action->search->objectTypeList['testsuite'] = 'スイート';
$lang->action->search->objectTypeList['caselib'] = 'パブリックデータベース';
$lang->action->search->objectTypeList['testreport'] = 'レポート';

/* 用来在动态显示中显示动作 */
$lang->action->search->label[''] = '';
$lang->action->search->label['created'] = $lang->action->label->created;
$lang->action->search->label['opened'] = $lang->action->label->opened;
$lang->action->search->label['changed'] = $lang->action->label->changed;
$lang->action->search->label['edited'] = $lang->action->label->edited;
$lang->action->search->label['assigned'] = $lang->action->label->assigned;
$lang->action->search->label['closed'] = $lang->action->label->closed;
$lang->action->search->label['deleted'] = $lang->action->label->deleted;
$lang->action->search->label['deletedfile'] = $lang->action->label->deletedfile;
$lang->action->search->label['editfile'] = $lang->action->label->editfile;
$lang->action->search->label['erased'] = $lang->action->label->erased;
$lang->action->search->label['undeleted'] = $lang->action->label->undeleted;
$lang->action->search->label['hidden'] = $lang->action->label->hidden;
$lang->action->search->label['commented'] = $lang->action->label->commented;
$lang->action->search->label['activated'] = $lang->action->label->activated;
$lang->action->search->label['blocked'] = $lang->action->label->blocked;
$lang->action->search->label['resolved'] = $lang->action->label->resolved;
$lang->action->search->label['reviewed'] = $lang->action->label->reviewed;
$lang->action->search->label['moved'] = $lang->action->label->moved;
$lang->action->search->label['confirmed'] = $lang->action->label->confirmed;
$lang->action->search->label['bugconfirmed'] = $lang->action->label->bugconfirmed;
$lang->action->search->label['tostory'] = $lang->action->label->tostory;
$lang->action->search->label['frombug'] = $lang->action->label->frombug;
$lang->action->search->label['totask'] = $lang->action->label->totask;
$lang->action->search->label['svncommited'] = $lang->action->label->svncommited;
$lang->action->search->label['gitcommited'] = $lang->action->label->gitcommited;
$lang->action->search->label['linked2plan'] = $lang->action->label->linked2plan;
$lang->action->search->label['unlinkedfromplan'] = $lang->action->label->unlinkedfromplan;
$lang->action->search->label['changestatus'] = $lang->action->label->changestatus;
$lang->action->search->label['marked'] = $lang->action->label->marked;
$lang->action->search->label['linked2project'] = $lang->action->label->linked2project;
$lang->action->search->label['unlinkedfromproject'] = $lang->action->label->unlinkedfromproject;
$lang->action->search->label['started'] = $lang->action->label->started;
$lang->action->search->label['restarted'] = $lang->action->label->restarted;
$lang->action->search->label['recordestimate'] = $lang->action->label->recordestimate;
$lang->action->search->label['editestimate'] = $lang->action->label->editestimate;
$lang->action->search->label['canceled'] = $lang->action->label->canceled;
$lang->action->search->label['finished'] = $lang->action->label->finished;
$lang->action->search->label['paused'] = $lang->action->label->paused;
$lang->action->search->label['verified'] = $lang->action->label->verified;
$lang->action->search->label['login'] = $lang->action->label->login;
$lang->action->search->label['logout'] = $lang->action->label->logout;
