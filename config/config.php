<?php
$config=Array
	(
	'title'=>'简单图床 - EasyImage',
	'keywords'=>'简单图床,easyimage,easyimage2.0,无数据库图床,免费图床,PHP多图长传程序,自适应页面,一键复制链接,HTML5,markdown,bbscode',
	'description'=>'简单图床EasyImage是一款支持多文件上传的无数据库图床,可以完美替代PHP多图上传程序,最新html5自适应页面兼容手机电脑,上传后返回图片直链,markdown图片,论坛贴图bbscode链接,简单方便支持一键复制,支持多域名,api上传',
	'tips'=>'<a href="https://github.com/icret/EasyImages2.0" target="_black"><i class="icon icon-github"> 如果你喜欢这种图床风格就下载喔 (๑•̀ㅂ•́)و✧</i></a>
<a href="https://github.com/icret/EasyImages2.0" target="_black"><i class="icon icon-heart"> 简单图床是一款开源图床, 支持多文件上传无数据库</i></a>
<a><li class="icon icon-bullhorn text-muted"> 单文件≤10M,单次上传≤30张</li></a>',
	'notice_status'=>0,
	'notice'=>'<p>简单图床是一款开源图床, 支持多文件上传无数据库；</p>
<p>如果你喜欢这种图床风格就<a href="https://github.com/icret/EasyImages2.0" target="_black">下载</a>喔 (๑•̀ㅂ•́)و✧</p>',
	'set_notice'=>'<div class="alert alert-primary alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
    <h5>目录保存以 年/月/日/ 递进,非必要请勿修改! 否则会导致部分操作不可用;</h5>
    <h5>本人仅为程序开源创作,如遇非法网站使用与本人无关,请勿用于商业用途;</h5>
    <h5>作为开发者你可以对相应的后台功能进行扩展(增删改相应代码),但请保留代码中源作者信息。</h5>
    <a href="https://png.cm/?admin.inc" target="_blank"><button type="button" class="btn btn-mini"><i class="icon icon-external-link"></i> 演示</button></a>
    <a href="https://icret.gitee.io/easyimages2.0/#/" target="_blank"><button type="button" class="btn btn-mini"><i class="icon icon-book"></i> 手册</button></a>
    <a href="https://github.com/icret/EasyImages2.0/discussions" target="_blank"><button type="button" class="btn btn-mini"><i class="icon icon-comments-alt"></i> 社区</button></a>
    <a href="https://t.me/Easy_Image" target="_blank" data-toggle="tooltip" title="EasyImage Telegram Group"><button type="button" class="btn btn-mini"><i class="icon icon-plane"></i> Telegram</button></a>
    <a href="https://s2.loli.net/2023/01/20/laTuceHD3qjpd82.jpg" title="您的赞美是我开发的动力!" data-toggle="lightbox" class="btn btn-mini" style="color:#329d38;"><i class="icon icon-wechat"></i> 打赏</a>
    <a href="https://s2.loli.net/2023/01/20/rREU1dJk9HMxDFA.jpg" title="您的赞美是我开发的动力!" data-toggle="lightbox" class="btn btn-mini hidden-xs inline-block" style="color:#1970fc;"><i class="icon icon-zhifubao"></i> 打赏</a>
</div>',
	'domain'=>'http://127.0.0.1',
	'imgurl'=>'http://127.0.0.1',
	'user'=>'admin',
	'password'=>'e6e061838856bf47e1de730719fb2609',
	'captcha'=>0,
	'mustLogin'=>0,
	'apiStatus'=>0,
	'path'=>'/i/',
	'storage_path'=>'Y/m/d/',
	'mime'=>'image/*,video/*',
	'imgName'=>'default',
	'maxSize'=>10485760,
	'maxUploadFiles'=>30,
	'watermark'=>0,
	'waterText'=>'简单图床 - png.cm',
	'waterPosition'=>0,
	'textColor'=>'rgba(34,177,75,1)',
	'textSize'=>50,
	'textFont'=>'/public/static/pang_men_zheng_dao_biao_ti_ti_3.0.ttf',
	'waterImg'=>'/public/images/watermark.png',
	'extensions'=>'gif,jpeg,png,tif,bmp,svg,webp,jpg,tga,ico',
	'compress'=>0,
	'compress_ratio'=>80,
	'thumbnail'=>1,
	'thumbnail_w'=>258,
	'thumbnail_h'=>258,
	'imgConvert'=>'',
	'maxWidth'=>10240,
	'maxHeight'=>10240,
	'minWidth'=>5,
	'minHeight'=>5,
	'imgRatio'=>0,
	'image_x'=>200,
	'image_y'=>200,
	'imgRatio_quality'=>80,
	'imgRatio_crop'=>1,
	'imgRatio_preserve_headers'=>1,
	'static_cdn'=>0,
	'theme'=>'default',
	'static_cdn_url'=>'https://fastly.jsdelivr.net/gh/icret/EasyImages2.0',
	'TinyPng_key'=>'',
	'checkImg'=>0,
	'checkImg_value'=>80,
	'moderatecontent_key'=>'',
	'nsfwjs_url'=>'',
	'showSwitch'=>1,
	'history'=>1,
	'showSort'=>1,
	'listNumber'=>20,
	'listDate'=>10,
	'customize'=>'',
	'checkEnv'=>1,
	'allowed'=>1,
	'upload_logs'=>1,
	'cache_freq'=>2,
	'upload_first_show'=>1,
	'dark-mode'=>1,
	'show_user_hash_del'=>1,
	'show_exif_info'=>1,
	'info_rand_pic'=>1,
	'chart_on'=>1,
	'check_ip'=>0,
	'check_ip_model'=>0,
	'check_ip_list'=>'',
	'ip_upload_counts'=>0,
	'public'=>0,
	'public_list'=>Array
		(
		0=>'time',
		1=>'today',
		2=>'yesterday',
		3=>'total_space',
		4=>'used_space',
		5=>'free_space',
		6=>'image_used',
		7=>'file',
		8=>'dir',
		9=>'month'
		),
	'language'=>0,
	'login_bg'=>'../application/bing.php',
	'report'=>'',
	'image_recycl'=>1,
	'tinyfilemanager'=>1,
	'file_manage'=>1,
	'delDir'=>'cache/',
	'hide'=>0,
	'hide_key'=>'EasyImage2.0',
	'hide_path'=>0,
	'admin_path_status'=>0,
	'guest_path_status'=>0,
	'token_path_status'=>0,
	'admin_path'=>'u',
	'update'=>'2023-02-06 11:47:07',
	'footer'=>'<a href="https://github.com/icret/EasyImages2.0" target="_blank" rel="nofollow" data-toggle="tooltip" title="Since 2018 - Github">© Since 2018</a>
<a href="https://png.cm/" target="_blank" data-toggle="tooltip" title="EasyImage 简单图床">EasyImage</a>
<a href="/admin/terms.php" target="_blank" data-toggle="tooltip" title="使用协议">DMCA</a>
<script>
    var _hmt = _hmt || [];
    (function() {
    var hm = document.createElement("script");
    hm.src = "https://hm.baidu.com/hm.js?c790ac2bdc2f385757ecd0183206108d";
    var s = document.getElementsByTagName("script")[0]; 
    s.parentNode.insertBefore(hm, s);
    })();
</script>',
	'ad_top'=>0,
	'ad_top_info'=>' <!--广告 按照这个范例替换相应链接，如果想多几个广告，就多复制几个-->
<div class="col-md-12" style="text-align: center;margin:2px;"><a href="https://app.cloudcone.com.cn/?ref=3521" target="_blank"><img src="/public/images/EasyImage2.0.png" /></a></div>',
	'ad_bot'=>0,
	'ad_bot_info'=>'<div class="col-md-12" style="text-align: center;margin-bottom:10px;"><a href="https://s2.loli.net/2023/01/20/laTuceHD3qjpd82.jpg" alt="您的赞美是我开发的动力!" data-toggle="lightbox" class="btn btn-mini" style="color:#329d38;" data-lightbox-group="group1644998953432"><i class="icon icon-wechat"></i> 打赏作者</a>
<a href="https://s2.loli.net/2023/01/20/rREU1dJk9HMxDFA.jpg" alt="您的赞美是我开发的动力!" data-toggle="lightbox" class="btn btn-mini" style="color:#1970fc;" data-lightbox-group="group1644998953432"><i class="icon icon-zhifubao"></i> 打赏作者</a></div>',
	'terms'=>'<div class="row"><div class="col-md-12 col-xs-12"><div class="col-md-3 col-xs-3"><ul class="nav nav-tabs nav-stacked"><li class="active"><a href="#Terms" data-target="#tab3Content1" data-toggle="tab">服务条款</a></li><li><a href="#Privacy" data-target="#tab3Content2" data-toggle="tab">隐私政策</a></li><li><a href="#DMCA" data-target="#tab3Content3" data-toggle="tab">DMCA</a></li></ul></div><div class="col-md-9 col-xs-9"><div class="tab-content col-md-9 col-xs-9"><div class="tab-pane fade active in" id="tab3Content1"><h4>服务条款</h4><hr><p>访问我们网站除主页和本“条款”页面以外的任何页面,即表示您同意这些使用条款和我们的隐私政策。如果您不同意,请不要使用我们的网站。</p><ol><li>您使用我们的网站进行除简单访问/查看之外的任何事情(即上传、下载、评论等),不仅构成您的同意,而且构成您的电子签名,这意味着您受这些条款的合同约束,并且通过我们的隐私政策。</li><li>我们保留在使用过多带宽或以其他方式滥用系统的用户帐户上禁用直接链接的权利。</li><li>请勿上传儿童色情内容或威胁、骚扰、诽谤或鼓励非法行为的材料。不要使用本网站作为内容交付网络。如果你这样做(我们将成为法官),或者如果你做了任何违法的事情,除了我们可能拥有的任何其他合法权利之外,我们将禁止你以及你从中盗链的网站,删除你的所有图片,报告如有必要,您可以向当局报告,并阻止您查看本网站上托管的任何图像。我们是认真的。</li><li>用户必须同意遵守适用于其所在地的所有法律,包括版权和商标法。不允许使用侵犯版权或商标的图片。如果有人对您提出侵权索赔,您将被要求删除受版权保护的文件,直到问题得到解决。如果本网站的参与者之间存在争议,我们没有义务参与其中。</li><li>您可以匿名上传图像,并与您的朋友、家人、在线站点以及社交网络在线共享。</li><li>如果您在我们的网站上看到任何不应该出现的内容,因为它违反了我们的政策或出于任何其他原因,请通过电子邮件联系告知我们</li><li>声明通知中的信息准确无误,否则会受到伪证处罚。为此,请包括以下声明: “我发誓,通知中的信息准确无误,并且我是(版权)所有者或被授权代表专有权的所有者行事,在作伪证的处罚下涉嫌侵权”。</li></ol><p>如果发生调查,本网站承诺与任何和所有法律机构合作。</p></div><div class="tab-pane fade" id="tab3Content2"><h4>隐私政策</h4><hr><h4>一般:</h4><p>当您访问本网站或使用本政策中进一步概述的服务(“服务”)时,本网站致力于保护您的隐私。作为使用本网站服务的条件,您同意向本网站提供某些个人信息。该信息包括但不限于: 电子邮件地址和您计算机的唯一 IP 地址(如果有)、财务信息(您的 Paypal 帐户使用的电子邮件地址)和人口统计信息(例如,邮政编码、邮政编码、家乡、性别、购买历史信息和年龄以及不是您计算机独有的 IP 地址)。请注意,我们不会在本网站的任何地方故意收集 13 岁以下儿童的联系信息或财务信息。请定期查看本隐私政策,因为我们可能会不时对其进行更新。本隐私政策的最后修订日期为 2021年10月25日。您每次访问本网站、使用服务或向我们提供信息时,即表示您当时接受本隐私政策中描述的做法。您同意,通过使用本网站,您明确并肯定地同意我们使用和披露您提供的信息,并同意接收电子邮件,如下面的隐私政策所述。</p><h4>隐私政策变更:</h4><p>随着新功能添加到网站或我们纳入用户的建议,本政策可能会随着时间的推移进行修订。如果我们打算以与我们收集信息时声明的方式大不相同的方式使用或披露您的个人身份信息,您将可以选择我们是否以这种新方式使用或披露您的信息。我们还将在我们的网站显着位置发布隐私政策已修订的通知,以便您可以随时查看我们收集的信息、我们将如何使用该信息以及在何种条件下我们将向任何人披露这些信息。</p><h4>如何使用您的信息:</h4><p>我们使用联系信息(即您的电子邮件地址)来帮助我们有效地执行帐户任务(更改密码、找回丢失的密码)、提供您请求的服务、执行质量保证、销售分析和其他业务分析,并就相关事宜与您联系与您向我们下的任何订单。除非满足任何法律、法规、政府要求或司法命令,否则不会将您的财务信息用于其他用途。当您通过本网站进行购买或在本网站注册时,您将向我们提供一个电子邮件地址,我们或这些服务提供商可能会出于本段所述目的与您联系。</p><h4>联系您获取优惠和促销信息:</h4><p>您同意,考虑到我们提供的服务的使用,允许我们使用您的个人信息向您发送营销和促销材料。我们也可能向您发送宣传第三方产品的营销和宣传材料。我们不会出租或出售您的个人信息以供第三方使用。这些材料可能包括但不限于: 向您提供有关如何使用服务的附加信息的时事通讯,以及来自我们或第三方的商品和服务的促销优惠。</p><h4>人口统计信息的使用:</h4><p>我们可能会使用您的人口统计信息进行业务分析或根据您的兴趣定制网站和通讯。我们可能会与广告商和其他第三方共享匿名的汇总人口统计信息,以便他们可以针对适当的受众定制广告和通信。在本隐私政策允许我们共享您的联系信息或财务信息的任何时候,我们也可能会同时共享您的人口统计信息。</p><h4>向政府实体披露:</h4><p>当我们确定此类披露是遵守法律、与执法部门合作或寻求执法协助或保护我们或网站其他访问者或用户的利益或安全时,我们可能会披露特定的联系信息。服务。此外,如果我们发生合并、收购、合并、剥离或破产,您的联系信息可能会传递给第三方。</p><h4>Cookie 和其他网站跟踪数据的使用:</h4><p>Cookies : “cookie”是我们保存在您计算机硬盘上的包含非个人信息的小文件。这些 cookie 有助于让您更快地访问您已经访问过的页面。它们还允许您个性化您的页面,并优化您在我们网站上的体验。我们还使用 cookie 来帮助我们了解有多少人访问了我们的网站、他们访问了我们的哪些网页以及他们在那里停留的时间。此信息可帮助我们确定我们的哪些网络功能非常成功以及哪些网站可能需要改进。您可以通过在浏览器的首选项或选项菜单中指明这一点来禁用计算机上的 cookie。大多数浏览器会自动接受 cookie,但允许您禁用它们。禁用 cookie 可能会阻止您正确使用服务或访问网站。</p><h4>会话 ID:</h4><p>“会话 ID”允许我们在多个网页请求中识别特定用户。此会话 ID 会尽可能保存在您的 cookie 文件中。如果 cookie 未启用,或者如果用户的 Internet 浏览器程序不支持 cookie,则我们将在请求的网页中放置会话 ID。这使最终用户不必为每个网页请求不断地重新输入某些信息,例如帐户名和密码。每当用户关闭其 Internet 浏览器时,此会话 ID 就会过期。</p><h4>网站跟踪、报告:</h4><p>我们的许多网页还包含特殊的电子图像(称为“单像素 gif”或“gif”),使我们能够仅收集非个人身份的流量统计数据和有关我们网站访问者的其他汇总信息。本站(通过自身或第三方)使用此技术收集和积累匿名数据,帮助我们了解和分析访问我们网站的人的体验,并连同您提供的其他信息,定制您未来的访问并改进我们的网站网站。例如,我们捕获有关所用浏览器类型、操作系统软件(例如 Windows 95 与 98 或 Macintosh)、cookie 偏好(用户是否打开或关闭它们)和搜索引擎关键字(哪些关键字做了什么)的数据。访问者用于访问我们的网站)。我们还记录了访问次数,所采取的路径,以及在我们网站内的站点和页面上花费的时间。请记住,这些信息都不是个人身份信息,我们只将这些信息分发给我们的内部员工以及与我们签署了保密协议的合作伙伴。我们与合作伙伴共享的任何信息都反映了整个网站或 Internet 使用趋势,而不是个别信息。</p><h4>IP地址:</h4><p>每次您访问本网站时,我们都会自动收集您的 IP 地址和您来自的网页。为了为您管理和优化站点并诊断我们站点的问题,我们使用您的 IP 地址来帮助识别您的身份并收集有关您的广泛人口统计信息。</p><h4>来自其他网站的信息:</h4><p>我们可能会放置指向其他方运营的其他网站的链接,并且可能会不时在我们的促销电子邮件中包含指向第三方网站的信息和链接。其中一些其他网站包含我们的品牌名称和商标以及我们拥有的其他知识产权；其他人没有。当您点击这些链接并访问这些其他网站时,无论它们是否包含我们的品牌名称、商标和其他知识产权,您都需要注意,我们不控制这些其他网站或这些其他网站”商业惯例,并且本隐私政策不适用于这些其他网站。因此,这些其他网站的运营商可能会收集有关您的不同类型的信息,并且可能以不同于我们在网站上收集信息的方式使用和披露该信息。我们鼓励您查看他们的隐私政策,并提醒您我们不对他们的行为负责。</p><h4>信息存储:</h4><p>您理解并同意我们在服务器上存储和处理您的信息,并且通过向我们提供任何数据,您同意将此类信息传输到网站服务器。当您从我们帐户中删除文件时,您与该文件之间将不再存在任何链接。删除的文件可能会缓存在我们服务器中以节省带宽,以防其他人请求它们。</p><h4>如何联系我们:</h4><p>如果您对您提交给我们这个隐私政策或信息有任何疑问,您可以通过邮件方式联系我们</p></div><div class="tab-pane fade" id="tab3Content3"><h4>数字千年版权法案</h4><hr><p>要向我们提交版权侵权通知,您需要发送书面通知,其中包含《数字千年版权法》第 512(c)(3) 条要求和规定的信息。</p><p>要撰写适当的 DMCA 通知,请说明以下信息:</p><ol><li>表明自己是您认为受到侵犯的版权作品或专有权的所有者,或代表此类所有者行事的人,并提供物理签名(纸质形式时)或电子签名(电子形式时) )。</li><li>指明您认为受到侵权的受版权保护的作品,或者如果有大量作品受到侵权,请提供作品的代表性清单。</li><li>通过在我们站点上提供包含这些材料的 Web URL,确定侵犯您的版权作品的材料的位置。请不要发送附加的图像、pdf 或其他文件格式的文件,而只能发送包含我们网址的列表。在信函正文中提供所有 URL 是帮助我们快速处理您的请求的最佳方式。</li><li>说明您的联系信息,包括您的姓名、街道地址、电话号码和电子邮件地址。如果您代表版权所有者行事,请同时说明您与版权所有者的关系(例如律师、供应商、代理人)。</li><li>声明您“真诚地相信上述材料的使用未经版权所有者、其代理人或法律授权”。</li><li>声明通知中的信息准确无误,否则会受到伪证处罚。为此,请包括以下声明: “我发誓,通知中的信息准确无误,并且我是(版权)所有者或被授权代表专有权的所有者行事,在作伪证的处罚下涉嫌侵权”。</li><li>请用中文书写,所有电子邮件是任何其他语言都将被忽略。</li><li>要行使您的 DMCA 权利,您必须将适当的 DMCA 通知发送至我们的指定代理至电子邮件。</li></ol><p>未能包含上述所有信息可能会导致 DMCA 通知的处理延迟。请注意,根据 DMCA 第 512(f) 条,任何故意歪曲材料或活动侵权的人都可能需要承担责任。</p><p>如果我们收到声称侵犯版权的适当通知,它将通过删除或禁止访问声称侵权或成为侵权活动主题的材料迅速做出回应。请注意,我们不一定会向报告者发送有关删除操作的确认。</p></div></div></div></div></div>'
	);