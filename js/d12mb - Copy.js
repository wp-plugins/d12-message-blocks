// Set up TinyMCE Plugin
(function() {
	tinymce.create('tinymce.plugins.d12mb', {
		init : function (ed, url) {
			ed.addButton('nutshell', {
				title:'This page in a nutshell',
				image:url + '/icons/acorn.png',
				onclick : function() {
					ed.selection.setContent('[nutshell]' + ed.selection.getContent() + '[/nutshell]');
				}
			});
			ed.addButton('attach', {
				title:'Highlight attachments',
				image:url + '/icons/attach.png',
				onclick : function() {
					ed.selection.setContent('[attach]' + ed.selection.getContent() + '[/attach]');
				}
			});
			ed.addButton('delete', {
				title:'Mark page for deletion',
				image:url + '/icons/delete.png',
				onclick : function() {
					ed.selection.setContent('[delete]' + ed.selection.getContent() + '[/delete]');
				}
			});
			ed.addButton('part', {
				title:'Part of a series',
				image:url + '/icons/cog.png',
				onclick : function() {
					ed.selection.setContent('[part]' + ed.selection.getContent() + '[/part]');
				}
			});
			ed.addButton('mentions', {
				title:'Page mentions',
				image:url + '/icons/mentions.png',
				onclick : function() {
					ed.selection.setContent('[mentions]' + ed.selection.getContent() + '[/mentions]');
				}
			});
			ed.addButton('warning', {
				title:'Warning',
				image:url + '/icons/warning.png',
				onclick : function() {
					ed.selection.setContent('[warning]' + ed.selection.getContent() + '[/warning]');
				}
			});
			ed.addButton('important', {
				title:'Important',
				image:url + '/icons/important.png',
				onclick : function() {
					ed.selection.setContent('[important]' + ed.selection.getContent() + '[/important]');
				}
			});
			ed.addButton('notice', {
				title:'Notice',
				image:url + '/icons/notice.png',
				onclick : function() {
					ed.selection.setContent('[notice]' + ed.selection.getContent() + '[/notice]');
				}
			});
			ed.addButton('error', {
				title:'Error',
				image:url + '/icons/error.png',
				onclick : function() {
					ed.selection.setContent('[error]' + ed.selection.getContent() + '[/error]');
				}
			});
			ed.addButton('caution', {
				title:'Caution',
				image:url + '/icons/caution.png',
				onclick : function() {
					ed.selection.setContent('[caution]' + ed.selection.getContent() + '[/caution]');
				}
			});
			ed.addButton('archive', {
				title:'Archive',
				image:url + '/icons/archive.png',
				onclick : function() {
					ed.selection.setContent('[archive]' + ed.selection.getContent() + '[/archive]');
				}
			});
			ed.addButton('support', {
				title:'Add "Help" message',
				image:url + '/icons/support.png',
				onclick : function() {
					ed.selection.setContent('[support message=""]' + ed.selection.getContent() + '[/support]');
				}
			});
		},
		createControl : function(n, cm) {  
			return null;
		},
	});
	tinymce.PluginManager.add( 'd12mb', tinymce.plugins.d12mb );
})();
