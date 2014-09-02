mw.loader.implement("ext.vector.collapsibleNav",function(){(function(mw,$){"use strict";var map,version;function toggle($element){$.cookie('vector-nav-'+$element.parent().attr('id'),$element.parent().is('.collapsed'),{'expires':30,'path':'/'});$element.parent().toggleClass('expanded').toggleClass('collapsed').find('.body').slideToggle('fast');}map={ltr:{opera:[['>=',9.6]],konqueror:[['>=',4.0]],blackberry:false,ipod:false,iphone:false,ps3:false},rtl:{opera:[['>=',9.6]],konqueror:[['>=',4.0]],blackberry:false,ipod:false,iphone:false,ps3:false}};if(!$.client.test(map)){return true;}version=1;if(mw.config.get('wgCollapsibleNavForceNewVersion')){version=2;}else{if(mw.config.get('wgCollapsibleNavBucketTest')){version=$.cookie('vector-nav-pref-version');if(version===null){version=Math.round(Math.random()+1);$.cookie('vector-nav-pref-version',version,{expires:30,path:'/'});}}}$(function($){var limit,threshold,languages,acceptLangCookie,$primary,$secondary,i,$link,count,$headings,tabIndex;if(
version===2){limit=5;threshold=3;$('#p-lang ul').addClass('secondary').before('<ul class="primary"></ul>');languages=['en','fr','de','es','pt','it','ru','ja','nl','pl','zh','sv','ar','tr','uk','fi','no','ca','ro','hu','ksh','id','he','cs','vi','ko','sr','fa','da','eo','sk','th','lt','vo','bg','sl','hr','hi','et','mk','simple','new','ms','nn','gl','el','eu','ka','tl','bn','lv','ml','bs','te','la','az','sh','war','br','is','mr','be-x-old','sq','cy','lb','ta','zh-classical','an','jv','ht','oc','bpy','ceb','ur','zh-yue','pms','scn','be','roa-rup','qu','af','sw','nds','fy','lmo','wa','ku','hy','su','yi','io','os','ga','ast','nap','vec','gu','cv','bat-smg','kn','uz','zh-min-nan','si','als','yo','li','gan','arz','sah','tt','bar','gd','tg','kk','pam','hsb','roa-tara','nah','mn','vls','gv','mi','am','ia','co','ne','fo','nds-nl','glk','mt','ang','wuu','dv','km','sco','bcl','mg','my','diq','tk','szl','ug','fiu-vro','sc','rm','nrm','ps','nv','hif','bo','se','sa','pnb','map-bms','lad','lij','crh',
'fur','kw','to','pa','jbo','ba','ilo','csb','wo','xal','krc','ckb','pag','ln','frp','mzn','ce','nov','kv','eml','gn','ky','pdc','lo','haw','mhr','dsb','stq','tpi','arc','hak','ie','so','bh','ext','mwl','sd','ig','myv','ay','iu','na','cu','pi','kl','ty','lbe','ab','got','sm','as','mo','ee','zea','av','ace','kg','bm','cdo','cbk-zam','kab','om','chr','pap','udm','ks','zu','rmy','cr','ch','st','ik','mdf','kaa','aa','fj','srn','tet','or','pnt','bug','ss','ts','pcd','pih','za','sg','lg','bxr','xh','ak','ha','bi','ve','tn','ff','dz','ti','ki','ny','rw','chy','tw','sn','tum','ng','rn','mh','ii','cho','hz','kr','ho','mus','kj'];acceptLangCookie=$.cookie('accept-language');if(acceptLangCookie!==null){if(acceptLangCookie!==''){languages=acceptLangCookie.split(',').concat(languages);}}else{$.getJSON(mw.util.wikiScript('api'),'format=json&action=query&meta=userinfo&uiprop=acceptlang',function(data){var langs=[],j,len,lang;if(data.query&&data.query.userinfo&&data.query.userinfo.acceptlang!==
undefined){for(j=0,lang=data.query.userinfo.acceptlang,len=lang.length;j<len;j++){if(lang[j].q!==0){langs.push(lang[j]['*']);}}}$.cookie('accept-language',langs.join(','),{path:'/',expires:30});});}$primary=$('#p-lang ul.primary');$secondary=$('#p-lang ul.secondary');if($secondary.children().length<limit+threshold){limit+=threshold;}count=0;for(i=0;i<languages.length;i++){$link=$secondary.find('.interwiki-'+languages[i]);if($link.length){if(count++<limit){$link.appendTo($primary);}else{break;}}}if(count<limit){$secondary.children().each(function(){if(count++<limit){$(this).appendTo($primary);}else{return false;}});}if($secondary.children().length===0){$secondary.remove();}else{$('#p-lang').after('<div id="p-lang-more" class="portal"><h5></h5><div class="body"></div></div>');$('#p-lang-more h5').text(mw.msg('vector-collapsiblenav-more'));$secondary.appendTo($('#p-lang-more .body'));}$('#p-lang').addClass('persistent');}$('#mw-panel > .portal:first').addClass('first persistent');$(
'#mw-panel').addClass('collapsible-nav');$('#mw-panel > .portal:not(.persistent)').each(function(i){var id=$(this).attr('id'),state=$.cookie('vector-nav-'+id);$(this).find('h5').wrapInner($('<a href="#"></a>').click(false));if(state==='true'||(state===null&&i<1)||(state===null&&version===1&&id==='p-lang')){$(this).addClass('expanded').removeClass('collapsed').find('.body').hide().show();}else{$(this).addClass('collapsed').removeClass('expanded');}if(state!==null){$.cookie('vector-nav-'+$(this).attr('id'),state,{'expires':30,'path':'/'});}});$headings=$('#mw-panel > .portal:not(.persistent) > h5');tabIndex=$(document).lastTabIndex()+1;$('#searchInput').attr('tabindex',tabIndex++);$headings.attr('tabindex',function(){return tabIndex++;});$('#mw-panel').delegate('.portal:not(.persistent) > h5','keydown',function(e){if(e.which===13||e.which===32){toggle($(this));}}).delegate('.portal:not(.persistent) > h5','mousedown',function(e){if(e.which!==3){toggle($(this));$(this).blur();}return false
;});});}(mediaWiki,jQuery));;},{"css":[
"#mw-panel.collapsible-nav .portal{background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIwAAAABCAMAAAA7MLYKAAAAS1BMVEXb29vy8vLv7+/c3NzZ2dni4uLr6+vt7e3s7Ozw8PDn5+fj4+Ph4eHd3d3f39/o6Ojl5eXp6enx8fHa2trg4ODq6urk5OTz8/PY2NjolWftAAAAO0lEQVR4XrXAhwGAMAgEQB5I71X3n9QpPHqAGZidt2e02G8yedciQkv1/YPqIpFSdzbp9tjGsd4xhwl8yuMKHhkJhm8AAAAASUVORK5CYII=) left top no-repeat;background:url(http://www-lcs.ensicaen.fr/pyPulsar/extensions/Vector/modules/images/portal-break.png?2012-10-13T22:05:00Z) left top no-repeat!ie;padding:0.25em 0 !important;margin:-11px 9px 10px 11px}#mw-panel.collapsible-nav .portal h5{color:#4D4D4D;font-weight:normal;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQBAMAAADt3eJSAAAAD1BMVEX////d3d2ampqxsbF5eXmCtCYvAAAAAXRSTlMAQObYZgAAADBJREFUeF6dzNEJACAMA1HdINQJCp1Ebv+ZlLYLaD4f4cbnDNi6MAO8KCHJ+7X02j3mzgMQe93HcQAAAABJRU5ErkJggg==) left center no-repeat;background:url(http://www-lcs.ensicaen.fr/pyPulsar/extensions/Vector/modules/images/open.png?2012-10-13T22:05:00Z) left center no-repeat!ie;padding:4px 0 3px 1.5em;margin-bottom:0}#mw-panel.collapsible-nav .portal h5:hover{cursor:pointer;text-decoration:none}#mw-panel.collapsible-nav .portal h5 a{color:#4D4D4D;text-decoration:none}#mw-panel.collapsible-nav .portal .body{background:none !important;padding-top:0;display:none}#mw-panel.collapsible-nav .portal .body ul li{padding:0.25em 0} #mw-panel.collapsible-nav .portal.first h5{display:none}#mw-panel.collapsible-nav .portal.first{background-image:none;margin-top:0} #mw-panel.collapsible-nav .portal.persistent .body{display:block}#mw-panel.collapsible-nav .portal.persistent h5{background:none !important;padding-left:0.7em;cursor:default}#mw-panel.collapsible-nav .portal.persistent .body{margin-left:0.5em} #mw-panel.collapsible-nav .portal.collapsed h5{color:#0645AD;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQAgMAAABinRfyAAAADFBMVEX///95eXnd3d2dnZ3aAo3QAAAAAXRSTlMAQObYZgAAADFJREFUeF5dyzEKACAMA0CXolNe2Id09Kl5igZahWY4AiGjZwmIuS9GEcJfY63Ix88Bol4EYP1O7JMAAAAASUVORK5CYII=) left center no-repeat;background:url(http://www-lcs.ensicaen.fr/pyPulsar/extensions/Vector/modules/images/closed-ltr.png?2012-10-13T22:05:00Z) left center no-repeat!ie;margin-bottom:0}#mw-panel.collapsible-nav .portal.collapsed h5 a{color:#0645AD}#mw-panel.collapsible-nav .portal.collapsed h5:hover{text-decoration:underline}\n/* cache key: pulsar-wiki_:resourceloader:filter:minify-css:7:440637e875684e6055130718ff17b106 */"
]},{"vector-collapsiblenav-more":"Plus de langues"});mw.loader.implement("ext.vector.collapsibleTabs",function(){jQuery(function($){var rtl=$('body').is('.rtl');$.collapsibleTabs.moveToCollapsed=function(ele){var $moving=$(ele);var data=$.collapsibleTabs.getSettings($moving);if(!data){return;}var expContainerSettings=$.collapsibleTabs.getSettings($(data.expandedContainer));if(!expContainerSettings){return;}expContainerSettings.shifting=true;var target=data.collapsedContainer;$moving.css('position','relative').css((rtl?'left':'right'),0).animate({width:'1px'},'normal',function(){var data;$(this).hide();$('<span class="placeholder" style="display: none;"></span>').insertAfter(this);$(this).detach().prependTo(target).data('collapsibleTabsSettings',data);$(this).attr('style','display: list-item;');data=$.collapsibleTabs.getSettings($(ele));if(data){var expContainerSettings=$.collapsibleTabs.getSettings($(data.expandedContainer));if(expContainerSettings){expContainerSettings.shifting=false;
$.collapsibleTabs.handleResize();}}});};$.collapsibleTabs.moveToExpanded=function(ele){var $moving=$(ele);var data=$.collapsibleTabs.getSettings($moving);if(!data){return;}var expContainerSettings=$.collapsibleTabs.getSettings($(data.expandedContainer));if(!expContainerSettings){return;}expContainerSettings.shifting=true;var $target=$(data.expandedContainer).find('span.placeholder:first');var expandedWidth=data.expandedWidth;$moving.css('position','relative').css((rtl?'right':'left'),0).css('width','1px');$target.replaceWith($moving.detach().css('width','1px').data('collapsibleTabsSettings',data).animate({width:expandedWidth+'px'},'normal',function(){$(this).attr('style','display: block;');var data=$.collapsibleTabs.getSettings($(this));if(data){var expContainerSettings=$.collapsibleTabs.getSettings($(data.expandedContainer));if(expContainerSettings){expContainerSettings.shifting=false;$.collapsibleTabs.handleResize();}}}));};$('#p-views ul').bind('beforeTabCollapse',function(){if($(
'#p-cactions').css('display')==='none'){$('#p-cactions').addClass('filledPortlet').removeClass('emptyPortlet').find('h5').css('width','1px').animate({'width':'26px'},390);}}).bind('beforeTabExpand',function(){if($('#p-cactions li').length===1){$('#p-cactions h5').animate({'width':'1px'},370,function(){$(this).attr('style','').parent().addClass('emptyPortlet').removeClass('filledPortlet');});}}).collapsibleTabs({expandCondition:function(eleWidth){if(rtl){return($('#right-navigation').position().left+$('#right-navigation').width()+1)<($('#left-navigation').position().left-eleWidth);}return($('#left-navigation').position().left+$('#left-navigation').width()+1)<($('#right-navigation').position().left-eleWidth);},collapseCondition:function(){if(rtl){return($('#right-navigation').position().left+$('#right-navigation').width())>$('#left-navigation').position().left;}return($('#left-navigation').position().left+$('#left-navigation').width())>$('#right-navigation').position().left;}});});;},{},
{});
/* cache key: pulsar-wiki_:resourceloader:filter:minify-js:7:dde3e1835541c4285e8384c1e1665c57 */