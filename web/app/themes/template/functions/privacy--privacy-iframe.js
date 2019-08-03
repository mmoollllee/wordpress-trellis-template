jQuery(document).find('.iframe-privacy').each(function() {

  var src = jQuery(this).attr('data-src');
  var src_name = jQuery(this).attr('data-src-name');
  var message = 'Diese Inhalte werden extern geladen von <span class="iframe-privacy--source">' + src_name + '</span>.<br />Durch das Aktivieren dieses Inhalts werden Daten wie Ihre IP-Adresse an den externen Server übertragen. Weitere Informationen entnehmen Sie bitte unserer <a href="/datenschutz/" title="Datenschutzerklärung lesen">Datenschutzerklärung</a>.';
  var button = '<a class="button blue" data-icon-right="O" data-src="' + src + '"><span>Inhalte laden</span></a>';

  jQuery(this).wrap( "<div class='iframe-privacy--wrapper'></div>" );
  jQuery(this).find('.iframe-privacy--wrapper').prepend('<div class="iframe-privacy--message"><p>' + message + '</p>' + button +'</div>');
});

jQuery('.iframe-privacy--message').click(function() {
  var parent = jQuery(this).parent();
  var src = jQuery(this).data('data-src');
  parent.next().attr("src", src);
  parent.remove();
});
