<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"D:\phpstudy_pro\WWW\faas\addons/kefu/view/default/modaltpl/admin.html";i:1605186773;}*/ ?>
<!-- KeFu-Admin-Template -->
<ins class="KeFu">

    <!-- 右侧悬浮按钮 -->
    <img src="<?php echo $cdnurl; ?>/assets/addons/kefu/img/buoy1.png" class="kefu_button" id="kefu_button" data-html="true" data-container="body" data-toggle="popover" data-placement="left" data-content="" alt="客服浮标" />
    <!-- 右侧悬浮按钮-end -->

    <!-- 聊天窗口 -->

    <div class="modal fade bs-example-modal-lg" id="KeFuModal" tabindex="-1" role="dialog" aria-labelledby="KeFuModal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">
                        <span id="modal-title">在线客服</span>
                        <div class="dropdown" id="kefu_csr_status">

                            <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                <span class="kefu_status">状态</span>
                                <span class="caret"></span>
                            </button>

                            <ul class="dropdown-menu" aria-labelledby="kefu_status_menu">
                                <li><a data-status="3" href="#">在线</a></li>
                                <li><a data-status="2" href="#">离开</a></li>
                                <li><a data-status="1" href="#">繁忙</a></li>
                            </ul>
                        </div>
                        <span id="kefu_error">链接中...</span>
                    </h4>
                </div>

                <div class="modal-body">
                    <div class="kefu-left">
                        <div class="top">
                            <input type="text" autocomplete="off" id="kefu_search_input" placeholder="搜索其实很简单"/>
                        </div>

                        <div id="session_list_search" class="search_users">

                        </div>

                        <div class="panel-group" id="session_panel" role="tablist" aria-multiselectable="false">

                            <!-- data-parent="#session_panel" 若需自动折叠，可在a标签上添加此属性 -->
                            <div class="panel panel-info dialogue_panel">
                                <div class="panel-heading" role="tab" id="heading_dialogue">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" href="#collapse_dialogue"
                                           aria-expanded="false" aria-controls="collapse_dialogue">对话中<span
                                                class="red_dot text-danger">•</span></a>
                                    </h4>
                                </div>
                                <div id="collapse_dialogue" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="heading_dialogue">
                                    <div class="panel-body">
                                        <ul id="session_list_dialogue" class="people">
                                            <div class="none_session">这里没有会话哦~</div>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-info invitation_panel">
                                <div class="panel-heading" role="tab" id="heading_invitation">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" href="#collapse_invitation"
                                           aria-expanded="false" aria-controls="collapse_invitation">可邀请<span
                                                class="red_dot text-danger">•</span></a>
                                    </h4>
                                </div>
                                <div id="collapse_invitation" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="heading_invitation">
                                    <div class="panel-body">
                                        <ul id="session_list_invitation" class="people">
                                            <div class="none_session">这里没有会话哦~</div>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-info recently_panel">
                                <div class="panel-heading" role="tab" id="heading_recently">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" href="#collapse_recently"
                                           aria-expanded="false" aria-controls="collapse_recently">最近沟通<span
                                                class="red_dot text-danger">•</span></a>
                                    </h4>
                                </div>
                                <div id="collapse_recently" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="heading_recently">
                                    <div class="panel-body">
                                        <ul id="session_list_recently" class="people">
                                            <div class="none_session">这里没有会话哦~</div>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="kefu-right">
                        <div class="top">
						<span>
							<span id="session_user_name" class="name">无会话</span>
							<span class="top_span" id="kefu_blacklist">拉黑名单</span>
							<span class="top_span" id="kefu_view_trajectory">查看轨迹</span>
							<span class="top_span" id="kefu_view_user_card">用户名片</span>
						</span>
                        </div>
                        <div class="chat">
                            <div class="chat_scroll kefu_window_view" id="kefu_scroll">

                            </div>
                            <div class="VivaTimeline kefu_window_view" id="kefu_trajectory">
                                <dl id="kefu_trajectory_log"></dl>
                            </div>
                            <div class="panel panel-success kefu_window_view" id="kefu_user_card">
                                <div class="panel-heading">用户名片</div>
                                <div class="panel-body">
                                    <form method="get" action="" class="form-horizontal">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">用户</label>
                                            <div class="col-sm-7">
                                                <input id="card-user" type="text" readonly="readonly"
                                                       class="form-control"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="card-nickname" class="col-sm-3 control-label">用户昵称</label>
                                            <div class="col-sm-7">
                                                <input id="card-nickname" name="nickname" type="text"
                                                       placeholder="请输入用户昵称" class="form-control"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="card-referrer" class="col-sm-3 control-label">用户来路</label>
                                            <div class="col-sm-7">
                                                <textarea id="card-referrer" name="referrer" rows="2"
                                                          class="form-control" placeholder=""></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="card-contact" class="col-sm-3 control-label">联系方式</label>
                                            <div class="col-sm-7">
                                                <textarea id="card-contact" name="contact" rows="2" class="form-control"
                                                          placeholder="QQ/微信/手机号等"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="card-note" class="col-sm-3 control-label">备注</label>
                                            <div class="col-sm-7">
                                                <textarea id="card-note" name="note" rows="4" class="form-control"
                                                          placeholder="请输入备注,备注信息用户不可见"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-3 col-sm-7">
                                                <button id="card-button" type="button" class="btn btn-success">确认修改
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- 按需渲染表情包 -->
                        <?php if(isset($toolbar['expression'])): ?>
                        <div class="kefu_emoji">
                            <div id="kefu_emoji">
                                <?php $__FOR_START_1977289013__=1;$__FOR_END_1977289013__=37;for($i=$__FOR_START_1977289013__;$i < $__FOR_END_1977289013__;$i+=1){ ?>
                                <img class="emoji" title="" src="<?php echo $cdnurl; ?>/assets/addons/kefu/img/emoji/<?php echo $i; ?>.png">
                                <?php } ?>
                            </div>
                        </div>
                        <?php endif; ?>

                        <!-- 按需渲染自动回复 -->
                        <?php if(isset($toolbar['fastreply'])): ?>
                        <div class="kefu_fast_reply_list">
                            <table class="table table-striped table-hover" id="kefu_fast_reply_list">
                                <?php if(is_array($fast_reply) || $fast_reply instanceof \think\Collection || $fast_reply instanceof \think\Paginator): $i = 0; $__LIST__ = $fast_reply;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$reply): $mod = ($i % 2 );++$i;?>
                                <tr data-id='<?php echo $reply['id']; ?>'>
                                    <td><?php echo $reply['title']; ?></td>
                                </tr>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </table>
                        </div>
                        <?php endif; ?>

                        <!--  准备链接输入面板  -->
                        <?php if(isset($toolbar['link'])): ?>
                        <div class="kefu_link_form">
                            <div id="kefu_link_form">
                                <div class="input-group">
                                    <span class="input-group-addon">链接说明</span>
                                    <input type="text" placeholder="选填" class="form-control" id="kefu_link_form_ins"/>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon">链接地址</span>
                                    <input type="text" value="http://" class="form-control" id="kefu_link_form_url"/>
                                </div>
                                <div class="link_form_buttons">
                                    <button type="button" class="btn btn-success btn-sm">确认</button>
                                    <button type="button" class="btn btn-default btn-sm">取消</button>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>

                        <!--用户输入状态-->
                        <div class="input_status">
                            <div id="kefu_input_status"></div>
                        </div>

                        <div class="write">
                            <div class="write_top">
                                <?php if(isset($toolbar['expression'])): ?>
                                <i class="toolbar_icon smiley" title="<?php echo $toolbar['expression']['title']; ?>" style="background: url('<?php echo $toolbar['expression']['icon_image']; ?>') no-repeat center;background-size: 80% 80%;"></i>
                                <?php endif; if(isset($toolbar['file'])): ?>
                                <div class="select_file">
                                    <input title="<?php echo $toolbar['file']['title']; ?>" id="chatfile" size="1" width="20" type="file" name="chatfile">
                                    <i class="attach toolbar_icon" style="background: url('<?php echo $toolbar['file']['icon_image']; ?>') no-repeat center;background-size: 80% 80%;"></i>
                                </div>
                                <?php endif; if(isset($toolbar['link'])): ?>
                                <i class="toolbar_icon link" title="<?php echo $toolbar['link']['title']; ?>" style="background: url('<?php echo $toolbar['link']['icon_image']; ?>') no-repeat center;background-size: 80% 80%;"></i>
                                <?php endif; ?>

                                <span title="按下Ctrl+Enter换行" class="write_top_span" id="send_tis">按下Enter发送消息</span>

                                <?php if(isset($toolbar['fastreply'])): ?>
                                <span class="write_top_span kefu_fast_reply"><?php echo $toolbar['fastreply']['title']; ?></span>
                                <?php endif; ?>
                            </div>
                            <pre contenteditable="plaintext-only" id="kefu_message"></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  客服端右击用户菜单  -->
    <ul class="dropdown-menu" style="z-index: 1060;" id="kefu_menu">
        <li class="kefu_menu_item transfer" data-action="transfer"><a href="#">转接会话</a></li>
        <li class="kefu_menu_item invitation" data-action="invitation"><a href="#">邀请对话</a></li>
        <li class="kefu_menu_item" data-action="edit_nickname"><a href="#">修改昵称</a></li>
        <li class="kefu_menu_item" data-action="del"><a href="#">删除会话</a></li>
    </ul>

    <!-- 聊天窗口-end -->
</ins>
<!-- KeFu-Template-end