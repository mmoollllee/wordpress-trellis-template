window.addEventListener("load", function() {
  window.cookieconsent.initialise({
    showLink: !1,
    position: "bottom",
    content: {
      message: "<?php _e('<strong>Diese Internetseite verwendet Cookies</strong> um die Nutzererfahrung zu verbessern und den Benutzern bestimmte Dienste und Funktionen bereitzustellen.', 'mg'); ?> <a class=\"cookie_link\" href=\"/datenschutz/\" data-icon-right=\"\'\"><?php _e('Mehr Infos', 'mg'); ?></a>",
      dismiss: "OK",
      learnMore: ""
    },
      elements: {
          dismiss: '<a aria-label="dismiss cookie message" role=button tabindex="0" class="cc-btn cc-dismiss button" data-icon-right="\'">{{dismiss}}</a>',
    },
      window: '<div role="dialog" aria-live="polite" aria-label="cookieconsent" aria-describedby="cookieconsent:desc" class="cc-window {{classes}}"><div class="container row"><!--googleoff: all-->{{children}}<!--googleon: all--></div></div>',
  });

  /*	jQuery(".cc-btn.cc-dismiss span").click(function() {
    jQuery(this).parent().click();
  }); */
});
