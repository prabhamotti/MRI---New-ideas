function isCompatible(){if(navigator.appVersion.indexOf('MSIE')!==-1&&parseFloat(navigator.appVersion.split('MSIE')[1])<6){return false;}return true;}var startUp=function(){mw.config=new mw.Map(true);mw.loader.addSource({"local":{"loadScript":"/pyPulsar/load.php","apiScript":"/pyPulsar/api.php"}});mw.loader.register([["site","1357634061",[],"site"],["noscript","1357634061",[],"noscript"],["startup","1409339307",[],"startup"],["filepage","1357634061"],["user.groups","1357634061",[],"user"],["user","1357634061",[],"user"],["user.cssprefs","1409339307",["mediawiki.user"],"private"],["user.options","1409339307",[],"private"],["user.tokens","1357634061",[],"private"],["mediawiki.language.data","1357648702",["mediawiki.language.init"]],["skins.chick","1357634061"],["skins.cologneblue","1357634061"],["skins.modern","1357634061"],["skins.monobook","1357634061"],["skins.nostalgia","1357634061"],["skins.simple","1357634061"],["skins.standard","1357634061"],["skins.vector","1357634061"],["jquery"
,"1357634061"],["jquery.appear","1357634061"],["jquery.arrowSteps","1357634061"],["jquery.async","1357634061"],["jquery.autoEllipsis","1357634061",["jquery.highlightText"]],["jquery.badge","1357634061"],["jquery.byteLength","1357634061"],["jquery.byteLimit","1357634061",["jquery.byteLength"]],["jquery.checkboxShiftClick","1357634061"],["jquery.client","1357634061"],["jquery.collapsibleTabs","1357634061"],["jquery.color","1357634061",["jquery.colorUtil"]],["jquery.colorUtil","1357634061"],["jquery.cookie","1357634061"],["jquery.delayedBind","1357634061"],["jquery.expandableField","1357634061",["jquery.delayedBind"]],["jquery.farbtastic","1357634061",["jquery.colorUtil"]],["jquery.footHovzer","1357634061"],["jquery.form","1357634061"],["jquery.getAttrs","1357634061"],["jquery.highlightText","1357634061",["jquery.mwExtension"]],["jquery.hoverIntent","1357634061"],["jquery.json","1357634061"],["jquery.localize","1357634061"],["jquery.makeCollapsible","1388412091"],["jquery.mockjax",
"1357634061"],["jquery.mw-jump","1357634061"],["jquery.mwExtension","1357634061"],["jquery.placeholder","1357634061"],["jquery.qunit","1357634061"],["jquery.qunit.completenessTest","1357634061",["jquery.qunit"]],["jquery.spinner","1357634061"],["jquery.jStorage","1357634061",["jquery.json"]],["jquery.suggestions","1357634061",["jquery.autoEllipsis"]],["jquery.tabIndex","1357634061"],["jquery.tablesorter","1357634061",["jquery.mwExtension"]],["jquery.textSelection","1357634061",["jquery.client"]],["jquery.validate","1357634061"],["jquery.xmldom","1357634061"],["jquery.tipsy","1357634061"],["jquery.ui.core","1357634061",["jquery"],"jquery.ui"],["jquery.ui.widget","1357634061",[],"jquery.ui"],["jquery.ui.mouse","1357634061",["jquery.ui.widget"],"jquery.ui"],["jquery.ui.position","1357634061",[],"jquery.ui"],["jquery.ui.draggable","1357634061",["jquery.ui.core","jquery.ui.mouse","jquery.ui.widget"],"jquery.ui"],["jquery.ui.droppable","1357634061",["jquery.ui.core","jquery.ui.mouse",
"jquery.ui.widget","jquery.ui.draggable"],"jquery.ui"],["jquery.ui.resizable","1357634061",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.selectable","1357634061",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.sortable","1357634061",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.accordion","1357634061",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.autocomplete","1357634061",["jquery.ui.core","jquery.ui.widget","jquery.ui.position"],"jquery.ui"],["jquery.ui.button","1357634061",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.datepicker","1357634061",["jquery.ui.core"],"jquery.ui"],["jquery.ui.dialog","1357634061",["jquery.ui.core","jquery.ui.widget","jquery.ui.button","jquery.ui.draggable","jquery.ui.mouse","jquery.ui.position","jquery.ui.resizable"],"jquery.ui"],["jquery.ui.progressbar","1357634061",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],[
"jquery.ui.slider","1357634061",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.tabs","1357634061",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.effects.core","1357634061",["jquery"],"jquery.ui"],["jquery.effects.blind","1357634061",["jquery.effects.core"],"jquery.ui"],["jquery.effects.bounce","1357634061",["jquery.effects.core"],"jquery.ui"],["jquery.effects.clip","1357634061",["jquery.effects.core"],"jquery.ui"],["jquery.effects.drop","1357634061",["jquery.effects.core"],"jquery.ui"],["jquery.effects.explode","1357634061",["jquery.effects.core"],"jquery.ui"],["jquery.effects.fade","1357634061",["jquery.effects.core"],"jquery.ui"],["jquery.effects.fold","1357634061",["jquery.effects.core"],"jquery.ui"],["jquery.effects.highlight","1357634061",["jquery.effects.core"],"jquery.ui"],["jquery.effects.pulsate","1357634061",["jquery.effects.core"],"jquery.ui"],["jquery.effects.scale","1357634061",["jquery.effects.core"],"jquery.ui"],[
"jquery.effects.shake","1357634061",["jquery.effects.core"],"jquery.ui"],["jquery.effects.slide","1357634061",["jquery.effects.core"],"jquery.ui"],["jquery.effects.transfer","1357634061",["jquery.effects.core"],"jquery.ui"],["mediawiki","1357634061"],["mediawiki.api","1357634061",["mediawiki.util"]],["mediawiki.api.category","1357634061",["mediawiki.api","mediawiki.Title"]],["mediawiki.api.edit","1357634061",["mediawiki.api","mediawiki.Title"]],["mediawiki.api.parse","1357634061",["mediawiki.api"]],["mediawiki.api.titleblacklist","1357634061",["mediawiki.api","mediawiki.Title"]],["mediawiki.api.watch","1357634061",["mediawiki.api","user.tokens"]],["mediawiki.debug","1357634061",["jquery.footHovzer"]],["mediawiki.debug.init","1357634061",["mediawiki.debug"]],["mediawiki.feedback","1357634061",["mediawiki.api.edit","mediawiki.Title","mediawiki.jqueryMsg","jquery.ui.dialog"]],["mediawiki.htmlform","1357634061"],["mediawiki.notification","1357634061",["mediawiki.page.startup"]],[
"mediawiki.notify","1357634061"],["mediawiki.searchSuggest","1388412091",["jquery.autoEllipsis","jquery.client","jquery.placeholder","jquery.suggestions"]],["mediawiki.Title","1357634061",["mediawiki.util"]],["mediawiki.Uri","1357634061"],["mediawiki.user","1357634061",["jquery.cookie","mediawiki.api"]],["mediawiki.util","1388412090",["jquery.client","jquery.cookie","jquery.mwExtension","mediawiki.notify"]],["mediawiki.action.edit","1357634061",["jquery.textSelection","jquery.byteLimit"]],["mediawiki.action.edit.preview","1357634061",["jquery.form","jquery.spinner"]],["mediawiki.action.history","1357634061",[],"mediawiki.action.history"],["mediawiki.action.history.diff","1357634061",[],"mediawiki.action.history"],["mediawiki.action.view.dblClickEdit","1357634061",["mediawiki.util"]],["mediawiki.action.view.metadata","1388853526"],["mediawiki.action.view.rightClickEdit","1357634061"],["mediawiki.action.watch.ajax","1357634061",["mediawiki.page.watch.ajax"]],["mediawiki.language",
"1357634061",["mediawiki.language.data","mediawiki.cldr"]],["mediawiki.cldr","1357634061",["mediawiki.libs.pluralruleparser"]],["mediawiki.libs.pluralruleparser","1357634061"],["mediawiki.language.init","1357634061"],["mediawiki.jqueryMsg","1357634061",["mediawiki.util","mediawiki.language"]],["mediawiki.libs.jpegmeta","1357634061"],["mediawiki.page.ready","1357634061",["jquery.checkboxShiftClick","jquery.makeCollapsible","jquery.placeholder","jquery.mw-jump","mediawiki.util"]],["mediawiki.page.startup","1357634061",["jquery.client","mediawiki.util"]],["mediawiki.page.watch.ajax","1357634061",["mediawiki.page.startup","mediawiki.api.watch","mediawiki.util","mediawiki.notify","jquery.mwExtension"]],["mediawiki.special","1357634061"],["mediawiki.special.block","1357634061",["mediawiki.util"]],["mediawiki.special.changeemail","1357634061",["mediawiki.util"]],["mediawiki.special.changeslist","1357634061",["jquery.makeCollapsible"]],["mediawiki.special.movePage","1357634061",[
"jquery.byteLimit"]],["mediawiki.special.preferences","1357634061"],["mediawiki.special.recentchanges","1357634061",["mediawiki.special"]],["mediawiki.special.search","1390629150"],["mediawiki.special.undelete","1357634061"],["mediawiki.special.upload","1357634061",["mediawiki.libs.jpegmeta","mediawiki.util"]],["mediawiki.special.javaScriptTest","1357634061",["jquery.qunit"]],["mediawiki.tests.qunit.testrunner","1357634061",["jquery.qunit","jquery.qunit.completenessTest","mediawiki.page.startup","mediawiki.page.ready"]],["mediawiki.legacy.ajax","1357634061",["mediawiki.util","mediawiki.legacy.wikibits"]],["mediawiki.legacy.commonPrint","1357634061"],["mediawiki.legacy.config","1357634061",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.IEFixes","1357634061",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.protect","1357634061",["mediawiki.legacy.wikibits","jquery.byteLimit"]],["mediawiki.legacy.shared","1357634061"],["mediawiki.legacy.oldshared","1357634061"],[
"mediawiki.legacy.upload","1357634061",["mediawiki.legacy.wikibits","mediawiki.util"]],["mediawiki.legacy.wikibits","1357634061",["mediawiki.util"]],["mediawiki.legacy.wikiprintable","1357634061"],["ext.nuke","1357634061"],["ext.vector.collapsibleNav","1388412091",["mediawiki.util","jquery.client","jquery.cookie","jquery.tabIndex"],"ext.vector"],["ext.vector.collapsibleTabs","1357634061",["jquery.collapsibleTabs","jquery.delayedBind"],"ext.vector"],["ext.vector.editWarning","1357634061",[],"ext.vector"],["ext.vector.expandableSearch","1357634061",["jquery.client","jquery.expandableField","jquery.delayedBind"],"ext.vector"],["ext.vector.footerCleanup","1357634061",["mediawiki.jqueryMsg","jquery.cookie"],"ext.vector"],["ext.vector.sectionEditLinks","1357634061",["jquery.cookie","jquery.clickTracking"],"ext.vector"],["contentCollector","1357634061",[],"ext.wikiEditor"],["jquery.wikiEditor","1357634061",["jquery.client","jquery.textSelection","jquery.delayedBind"],"ext.wikiEditor"],[
"jquery.wikiEditor.iframe","1357634061",["jquery.wikiEditor","contentCollector"],"ext.wikiEditor"],["jquery.wikiEditor.dialogs","1357634061",["jquery.wikiEditor","jquery.wikiEditor.toolbar","jquery.ui.dialog","jquery.ui.button","jquery.ui.draggable","jquery.ui.resizable","jquery.tabIndex"],"ext.wikiEditor"],["jquery.wikiEditor.dialogs.config","1357634061",["jquery.wikiEditor","jquery.wikiEditor.dialogs","jquery.wikiEditor.toolbar.i18n","jquery.suggestions","mediawiki.Title"],"ext.wikiEditor"],["jquery.wikiEditor.highlight","1357634061",["jquery.wikiEditor","jquery.wikiEditor.iframe"],"ext.wikiEditor"],["jquery.wikiEditor.preview","1357634061",["jquery.wikiEditor"],"ext.wikiEditor"],["jquery.wikiEditor.previewDialog","1357634061",["jquery.wikiEditor","jquery.wikiEditor.dialogs"],"ext.wikiEditor"],["jquery.wikiEditor.publish","1357634061",["jquery.wikiEditor","jquery.wikiEditor.dialogs"],"ext.wikiEditor"],["jquery.wikiEditor.templateEditor","1357634061",["jquery.wikiEditor",
"jquery.wikiEditor.iframe","jquery.wikiEditor.dialogs"],"ext.wikiEditor"],["jquery.wikiEditor.templates","1357634061",["jquery.wikiEditor","jquery.wikiEditor.iframe"],"ext.wikiEditor"],["jquery.wikiEditor.toc","1357634061",["jquery.wikiEditor","jquery.wikiEditor.iframe","jquery.ui.draggable","jquery.ui.resizable","jquery.autoEllipsis","jquery.color"],"ext.wikiEditor"],["jquery.wikiEditor.toolbar","1357634061",["jquery.wikiEditor","jquery.wikiEditor.toolbar.i18n"],"ext.wikiEditor"],["jquery.wikiEditor.toolbar.config","1357634061",["jquery.wikiEditor","jquery.wikiEditor.toolbar.i18n","jquery.wikiEditor.toolbar","jquery.cookie","jquery.async"],"ext.wikiEditor"],["jquery.wikiEditor.toolbar.i18n","1357634061",[],"ext.wikiEditor"],["ext.wikiEditor","1357634061",["jquery.wikiEditor"],"ext.wikiEditor"],["ext.wikiEditor.dialogs","1357634061",["ext.wikiEditor","ext.wikiEditor.toolbar","jquery.wikiEditor.dialogs","jquery.wikiEditor.dialogs.config"],"ext.wikiEditor"],["ext.wikiEditor.highlight",
"1357634061",["ext.wikiEditor","jquery.wikiEditor.highlight"],"ext.wikiEditor"],["ext.wikiEditor.preview","1357634061",["ext.wikiEditor","jquery.wikiEditor.preview"],"ext.wikiEditor"],["ext.wikiEditor.previewDialog","1357634061",["ext.wikiEditor","jquery.wikiEditor.previewDialog"],"ext.wikiEditor"],["ext.wikiEditor.publish","1357634061",["ext.wikiEditor","jquery.wikiEditor.publish"],"ext.wikiEditor"],["ext.wikiEditor.templateEditor","1357634061",["ext.wikiEditor","ext.wikiEditor.highlight","jquery.wikiEditor.templateEditor"],"ext.wikiEditor"],["ext.wikiEditor.templates","1357634061",["ext.wikiEditor","ext.wikiEditor.highlight","jquery.wikiEditor.templates"],"ext.wikiEditor"],["ext.wikiEditor.toc","1357634061",["ext.wikiEditor","ext.wikiEditor.highlight","jquery.wikiEditor.toc"],"ext.wikiEditor"],["ext.wikiEditor.tests.toolbar","1357634061",["ext.wikiEditor.toolbar"],"ext.wikiEditor"],["ext.wikiEditor.toolbar","1357634061",["ext.wikiEditor","jquery.wikiEditor.toolbar",
"jquery.wikiEditor.toolbar.config"],"ext.wikiEditor"],["ext.wikiEditor.toolbar.hideSig","1357634061",[],"ext.wikiEditor"]]);mw.config.set({"wgLoadScript":"/pyPulsar/load.php","debug":false,"skin":"vector","stylepath":"/pyPulsar/skins","wgUrlProtocols":"http\\:\\/\\/|https\\:\\/\\/|ftp\\:\\/\\/|irc\\:\\/\\/|ircs\\:\\/\\/|gopher\\:\\/\\/|telnet\\:\\/\\/|nntp\\:\\/\\/|worldwind\\:\\/\\/|mailto\\:|news\\:|svn\\:\\/\\/|git\\:\\/\\/|mms\\:\\/\\/|\\/\\/","wgArticlePath":"/pyPulsar/index.php/$1","wgScriptPath":"/pyPulsar","wgScriptExtension":".php","wgScript":"/pyPulsar/index.php","wgVariantArticlePath":false,"wgActionPaths":{},"wgServer":"http://www-lcs.ensicaen.fr","wgUserLanguage":"fr","wgContentLanguage":"fr","wgVersion":"1.20.2","wgEnableAPI":true,"wgEnableWriteAPI":true,"wgMainPageTitle":"Home","wgFormattedNamespaces":{"-2":"Média","-1":"Spécial","0":"","1":"Discussion","2":"Utilisateur","3":"Discussion utilisateur","4":"PyPulsar","5":"Discussion PyPulsar","6":"Fichier","7":
"Discussion fichier","8":"MediaWiki","9":"Discussion MediaWiki","10":"Modèle","11":"Discussion modèle","12":"Aide","13":"Discussion aide","14":"Catégorie","15":"Discussion catégorie"},"wgNamespaceIds":{"média":-2,"spécial":-1,"":0,"discussion":1,"utilisateur":2,"discussion_utilisateur":3,"pypulsar":4,"discussion_pypulsar":5,"fichier":6,"discussion_fichier":7,"mediawiki":8,"discussion_mediawiki":9,"modèle":10,"discussion_modèle":11,"aide":12,"discussion_aide":13,"catégorie":14,"discussion_catégorie":15,"discuter":1,"discussion_image":7,"image":6,"image_talk":7,"media":-2,"special":-1,"talk":1,"user":2,"user_talk":3,"project":4,"project_talk":5,"file":6,"file_talk":7,"mediawiki_talk":9,"template":10,"template_talk":11,"help":12,"help_talk":13,"category":14,"category_talk":15},"wgSiteName":"PyPulsar","wgFileExtensions":["png","gif","jpg","jpeg"],"wgDBname":"pulsar","wgFileCanRotate":true,"wgAvailableSkins":{"myskin":"MySkin","modern":"Modern","monobook":"MonoBook","vector":
"Vector","cologneblue":"CologneBlue","chick":"Chick","simple":"Simple","nostalgia":"Nostalgia","standard":"Standard"},"wgExtensionAssetsPath":"/pyPulsar/extensions","wgCookiePrefix":"pulsar_wiki_","wgResourceLoaderMaxQueryLength":512,"wgCaseSensitiveNamespaces":[],"wgCollapsibleNavBucketTest":false,"wgCollapsibleNavForceNewVersion":false,"wgWikiEditorMagicWords":{"redirect":"#REDIRECTION","img_right":"droite","img_left":"gauche","img_none":"néant","img_center":"centré","img_thumbnail":"vignette","img_framed":"cadre","img_frameless":"sans_cadre"}});};if(isCompatible()){document.write("\x3cscript src=\"/pyPulsar/load.php?debug=false\x26amp;lang=fr\x26amp;modules=jquery%2Cmediawiki\x26amp;only=scripts\x26amp;skin=vector\x26amp;version=20121204T210731Z\"\x3e\x3c/script\x3e");}delete isCompatible;
/* cache key: pulsar-wiki_:resourceloader:filter:minify-js:7:244c404d717a6093956f140095dcd522 */