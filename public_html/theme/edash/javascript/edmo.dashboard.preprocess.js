(function($) {
    $(document).ready(function() {
      // Custom Select Search w/ Icons
      $("div[id$='edash_icon_class'], div[id^='edash_icon_class'], .edash_icon_class").each(function() {
        $(this).find(".custom-select").each(function() {
          $(this).wrap("<div class='ui_kit_select_search'></div>");
          $(this).find("option").each(function() {
            var $edashIcon = $(this).attr("value");
            $(this).attr("data-tokens", $edashIcon).attr("data-icon", $edashIcon).attr("data-subtext", $edashIcon);
          });
          $(this).addClass("selectpicker").attr("data-live-search", "true").attr("data-width", "100%").removeClass("custom-select");
        });
      });
    });

  }(jQuery));
