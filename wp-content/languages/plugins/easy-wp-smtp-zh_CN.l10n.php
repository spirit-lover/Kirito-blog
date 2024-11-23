<?php
return ['x-generator'=>'GlotPress/4.0.1','translation-revision-date'=>'2024-03-13 13:31:45+0000','plural-forms'=>'nplurals=1; plural=0;','project-id-version'=>'Plugins - Easy WP SMTP – WordPress SMTP and Email Logs: Gmail, Office 365, Outlook, Custom SMTP, and more - Stable (latest release)','language'=>'zh_CN','messages'=>['debug log is reset when the plugin is activated, deactivated or updated.'=>'插件激活、停用或更新时，调试日志会被重置。','Optional. This email address will be used in the \'BCC\' field of the outgoing emails. Use this option carefully since all your outgoing emails from this site will add this address to the BCC field. You can also enter multiple email addresses (comma separated).'=>'可选。此电子邮件地址将用于外发电子邮件的“密件抄送”字段。您从此站点发出的所有电子邮件都会将此地址添加到密件抄送字段，请谨慎使用。您可以输入多个电子邮件地址(逗号分隔)。','BCC Email Address'=>'密送电子邮件地址','When enabled, the plugin will substitute occurances of the above From Email with the Reply-To Email address. The Reply-To Email will still be used if no other Reply-To Email is present. This option can prevent conflicts with other plugins that specify reply-to email addresses but still replaces the From Email with the Reply-To Email.'=>'启用此选项时，如果将被发送的邮件中没有设置「回复到」电子邮件地址，系统将使用此处设置的电子邮件作为「回复到」电子邮件地址。','Substitute Mode'=>'备用模式','Can\'t clear log - file is not writeable.'=>'无法清除日志-文件不可写。','Warning! This can\'t be undone.'=>'警告！ 此操作无法撤销。','This will remove ALL your settings and deactivate the plugin. Useful when you\'re uninstalling the plugin and want to completely remove all crucial data stored in the database.'=>'此操作将删除所有设置并停用插件。 在卸载插件并希望完全删除数据库中存储的所有关键数据时很有用。','Self-destruct'=>'自毁','Delete Settings and Deactivate Plugin'=>'删除设置并禁用插件','Actions in this section can (and some of them will) erase or mess up your settings. Use it with caution.'=>'本部分中的操作（某些操作）可以会擦除或破坏您的设置，请谨慎使用。','Danger Zone'=>'危险操作','All settings have been deleted and plugin is deactivated.'=>'所以设置已删除，插件已停用。','Are you sure you want to delete ALL your settings and deactive plugin?'=>'确定要删除所有设置并停用插件吗？','Please refresh the page and try again.'=>'请刷新该页面并重试。','Documentation'=>'说明文档','Sending...'=>'正在发送...','Error occurred:'=>'发生错误：','STARTTLS'=>'STARTTLS','SSL/TLS'=>'SSL/TLS','Hide Debug Log'=>'隐藏调试日志','Show Debug Log'=>'显示调试日志','Test email was successfully sent. No errors occurred during the process.'=>'测试电子邮件已成功发送。此过程中没有发生错误。','Following error occurred when attempting to send test email:'=>'尝试发送测试电子邮件时发生以下错误：','When enabled, your SMTP password is stored in the database using AES-256 encryption.'=>'启用后，您的 SMTP密码将使用AES-256加密存储在数据库中。','Encrypt Password'=>'加密密码','Your PHP version is %s, encryption function requires PHP version 5.3.0 or higher.'=>'你的 PHP版本是%s，加密功能需要 PHP 5.3.0 或更高版本。','PHP OpenSSL extension is not installed on the server. It is required for encryption to work properly. Please contact your server administrator or hosting provider and ask them to install it.'=>'服务器上未安装PHP OpenSSL扩展。加密需要此扩展才能正常工作。请联系您的服务器管理员或主机提供商进行安装。','PHP OpenSSL extension is not installed on the server. It\'s required by Easy WP SMTP plugin to operate properly. Please contact your server administrator or hosting provider and ask them to install it.'=>'服务器上未安装PHP OpenSSL扩展。Easy WP SMTP 插件需要此扩展才能正常运行。请联系您的服务器管理员或主机提供商进行安装。','If email\'s From Name is empty, the plugin will set the above value regardless.'=>'如果邮件的发件人名称为空，该插件将设置上述值。','When enabled, the plugin will set the above From Name for each email. Disable it if you\'re using contact form plugins, it will prevent the plugin from replacing form submitter\'s name when contact email is sent.'=>'启用后，插件将为每封邮件强制设置此处的 "发件人名称"，如果您使用联系表单插件，请禁用此选项，否则此插件将禁止其他插件在发送联系人邮件时替换表单提交者的姓名。','Force From Name Replacement'=>'强制替换发件人名称','rating'=>'评价','%s is replaced by "rating" linkLike the plugin? Please give us a %s'=>'喜欢此插件？请给我们一个 %s','Rate Us'=>'给我们评价','Support Forum'=>'支持论坛','%s is replaced by "Support Forum" linkHaving issues or difficulties? You can post your issue on the %s'=>'有问题或遇到困难？您可以在%s上发布问题，请求帮助。','Support'=>'支持','when you click "Save Changes", your actual password is stored in the database and then used to send emails. This field is replaced with a gag (#easywpsmtpgagpass#). This is done to prevent someone with the access to Settings page from seeing your password (using password fields unmasking programs, for example).'=>'单击 "保存更改" 时, 您的实际密码将存储在数据库中，用于发送邮件。此字段被替换为一个字符串 (#easywpsmtpgagpass#)。这样做是为了防止有权访问 "设置" 页面的人看到您的密码(例如, 使用密码字段解除屏蔽程序)。','Allows insecure and self-signed SSL certificates on SMTP server. It\'s highly recommended to keep this option disabled.'=>'允许在 SMTP 服务器上使用不安全的自签名 SSL 证书，强烈建议禁用此选项。','Allow Insecure SSL Certificates'=>'允许不安全的 SSL 证书','debug log for this test email will be automatically displayed right after you send it. Test email also ignores "Enable Domain Check" option.'=>'测试邮件的调试日志将在您发送邮件后自动显示，测试邮件会忽略 "启用域名检查" 选项。','"Note" as in "Note: keep this in mind"Note:'=>'注意：','You can use this section to send an email from your server using the above configured SMTP details to see if the email gets delivered.'=>'您可以这里使用上面配置的 SMTP 信息从您的服务器发送邮件, 以查看邮件是否已发送。','You have unsaved settings. In order to send a test email, you need to go back to previous tab and click "Save Changes" button first.'=>'您有未保存的设置。在发送测试电子邮件之前，您需要返回上一个选项卡, 然后单击 "保存更改 " 按钮。','Block all emails'=>'阻止所有邮件','You can request your hosting provider for the SMTP details of your site. Use the SMTP details provided by your hosting provider to configure the following settings.'=>'您可以联系电子邮件服务提供商来了解 SMTP 信息。使用主机提供商提供的 SMTP 信息配置下列选项。','SMTP Settings'=>'SMTP 设置','Nonce check failed.'=>'随机数检查失败。','When enabled, plugin attempts to block ALL emails from being sent out if domain mismatch.'=>'启用此选项时, 如果域名不匹配，插件将阻止发送所有电子邮件。','This option is useful when you are using several email aliases on your SMTP server. If you don\'t want your aliases to be replaced by the address specified in "From" field, enter them in this field.'=>'当您在 SMTP 服务器上使用多个邮箱地址别名时, 此选项很有用。如果您不希望将别名替换为 "发件人" 字段中指定的地址, 请在此字段中输入邮箱地址的别名。','Comma separated emails list. Example value: email1@domain.com, email2@domain.com'=>'逗号分隔的电子邮箱地址列表，如: email1@domain.com, email2@domain.com','Don\'t Replace "From" Field'=>'不要替换 "发件人" 字段','Additional Settings (Optional)'=>'其他设置 (可选)','Test Email'=>'测试电子邮件','Log cleared.'=>'日志已清除。','Are you sure want to clear log?'=>'是否确实要清除日志？','Clear Log'=>'清除日志','View Log'=>'查看日志','Check this box to enable mail debug log'=>'选中此项可启用邮件调试日志','Enable Debug Log'=>'启用调试日志','Coma-separated domains list. Example: domain1.com, domain2.com'=>'用逗号分隔域列表。例如:domain1.com,domain2.com','This option is usually used by developers only. SMTP settings will be used only if the site is running on following domain(s):'=>'此选项通常只供开发人员使用. 只当网站在以下域名中运行时才会使用 SMTP 设置:','Enable Domain Check'=>'启用域名检查','Additional Settings'=>'其他设置','Optional. This email address will be used in the \'Reply-To\' field of the email. Leave it blank to use \'From\' email as the reply-to value.'=>'可选，此邮箱地址将用于邮件的「回复到」字段，留空以使用 "发件人" 邮箱地址。','Reply-To Email Address'=>'回复到电子邮箱地址','SMTP Configuration Settings'=>'SMTP 设置','Please enter a valid email address in the recipient email field.'=>'请在收件人邮箱地址字段中输入有效的邮箱地址。','Enter the recipient\'s email address'=>'输入收件人邮箱地址','Write your email message'=>'请撰写测试邮件内容','Please configure your SMTP credentials in the <a href="%s">settings menu</a> in order to send email using Easy WP SMTP plugin.'=>'若要使用Easy WP SMTP，请在设置中填写您的SMTP配置项。','Save Changes'=>'保存更改','To'=>'收件人','Subject'=>'主题','Send Test Email'=>'发送测试邮件','Settings'=>'设置','None'=>'无','SSL'=>'SSL','TLS'=>'TLS','From Email Address'=>'发件人邮箱地址','From Name'=>'发件人名称','SMTP Host'=>'SMTP 主机','For most servers SSL/TLS is the recommended option'=>'对大多数服务器而言SSL/TLS是推荐选项','SMTP Port'=>'SMTP 端口','SMTP Authentication'=>'SMTP 认证','No'=>'否','Yes'=>'是','This options should always be checked \'Yes\''=>'此选项应始终选择 "是"','SMTP Password'=>'SMTP 密码','The password to login to your mail server'=>'登录到您邮件服务器的密码','Message'=>'邮件内容','SMTP Username'=>'SMTP 用户名','Type of Encryption'=>'加密类型','Easy WP SMTP'=>'Easy WP SMTP','Enter a subject for your message'=>'输入测试邮件的主题','The username to login to your mail server'=>'登录到您电子邮件服务器的用户名','The port to your mail server'=>'您电子邮件服务器端口','Your mail server'=>'您的电子邮件服务器','This text will be used in the \'FROM\' field'=>'此设置将在 "发件人" 字段中使用','This email address will be used in the \'From\' field.'=>'此邮箱地址将在 "发件人" 字段中使用。','Settings saved.'=>'设置已保存。','Settings are not saved.'=>'设置尚未保存。','Please enter a valid email address in the \'FROM\' field.'=>'请在 \'发件人\' 字段中输入一个有效的邮箱地址。','Please enter a valid port in the \'SMTP Port\' field.'=>'请在「SMTP端口」字段中输入一个有效的端口。','Easy WP SMTP Settings'=>'Easy WP SMTP设置']];