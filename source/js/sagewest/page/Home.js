goog.provide('sagewest.page.Home');
goog.require('sagewest.page.Default');


goog.require('manic.google.Map');



/**
 * The MICE constructor
 * @inheritDoc
 * @constructor
 * @extends {sagewest.page.Default}
 */
sagewest.page.Home = function(options, element) {
  sagewest.page.Default.call(this, options, element);
  this.options = $.extend(this.options, sagewest.page.Home.DEFAULT, options);



  /**
   * @type {jQuery}
   */
  this.experience_carousel = null;

  /**
   * @type {manic.google.Map}
   */
  this.contact_map = null;


};
goog.inherits(sagewest.page.Home, sagewest.page.Default);



// i have to remove this eventually, it's better to have class STATIC variables,  this.var with STATIC defaults...

/**
 * default options for MICE
 * @const {object}
 */
sagewest.page.Home.DEFAULT = {

};



/**
 * @override
 * @inheritDoc
 */
sagewest.page.Home.prototype.init = function() {

  sagewest.page.Home.superClass_.init.call(this);

  this.create_experience_slider();
  this.create_contact_map();
  this.create_instagram();

  this.update_page_layout();    // this is called after the initial create to update the layout

};






//     ____ ____  _____    _  _____ _____
//    / ___|  _ \| ____|  / \|_   _| ____|
//   | |   | |_) |  _|   / _ \ | | |  _|
//   | |___|  _ <| |___ / ___ \| | | |___
//    \____|_| \_\_____/_/   \_\_| |_____|
//




sagewest.page.Home.prototype.create_experience_slider = function(){

  

  this.experience_carousel = $('#home-experience-carousel').slick({
    'speed': 350,
    'dots': false,
    'arrows': false,
    'infinite': false,
    'slidesToShow': 1,
    'slidesToScroll': 1,
    'pauseOnHover': true,
    'autoplay': true,
    'autoplaySpeed': 4000
  });

};


sagewest.page.Home.prototype.create_contact_map = function(){

  this.contact_map = new manic.google.Map({
    'lat': -31.947952,
    'lng': 115.8386173,
    'has_scrollwheel': false,
    // 'has_scrollwheel': true,
    'zoom': 16,
    'google_style_array':
      [{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#d3d3d3"}]},{"featureType":"transit","stylers":[{"color":"#808080"},{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"color":"#b3b3b3"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"weight":1.8}]},{"featureType":"road.local","elementType":"geometry.stroke","stylers":[{"color":"#d7d7d7"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ebebeb"}]},{"featureType":"administrative","elementType":"geometry","stylers":[{"color":"#a7a7a7"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#efefef"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#696969"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"visibility":"on"},{"color":"#737373"}]},{"featureType":"poi","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#d6d6d6"}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"color":"#dadada"}]}]
  }, $('#home-contact-map'));

  this.contact_map.add_to_overlay($('#home-contact-map-overlay'));



};


sagewest.page.Home.prototype.create_instagram = function(){



  this.instagram_feed = null;

  var instafeed_template = [

    
    '<a class="home-instagram-item" href="{{link}}" target="_blank" title="{{caption}}">',
      '<div class="manic-image-container">',
        '<img src="" data-image-desktop="{{image}}">',
      '</div>',
    '</a>'
  ].join('');


  this.instagram_feed = new Instafeed({
    'target': 'home-instagram-item-container',
    'get': 'user',

    /*
    'userId': 1651397887,
    'accessToken': '1651397887.1677ed0.ef9b91e8df964f34b1d9f6c6b54e6d28',
    */

    'userId': 2989036714,
    'accessToken': '2989036714.1677ed0.7bf2fb6621874f7fbd244ce3ccf92749',

    
    
    'template': instafeed_template,
    'before': this.on_before_instafeed_create_html.bind(this),
    'after': this.on_after_instafeed_create_html.bind(this),
    // 'limit': 24,            // this number can be smaller
    'limit': 6,
    'resolution': 'low_resolution'
  });
  this.instagram_feed.run();
};

sagewest.page.Home.prototype.on_before_instafeed_create_html = function(){
  $('#home-instagram-item-container').empty();
};


sagewest.page.Home.prototype.on_after_instafeed_create_html = function(){
  var arr = $('#home-instagram-item-container .manic-image-container');
  var image_container = null;
  var item = null;

  for (var i = 0, l=arr.length; i < l; i++) {
    item = $(arr[i]);
    image_container = new manic.ui.ImageContainer({
      'has_window_resize': false,                                // updated manually by 'update_page_layout'
      'scale_mode': 'best_fit_no_scale_down'
    }, item);
    this.manic_image_array[this.manic_image_array.length] = image_container;
  }

  this.update_page_layout();
};



//    __  __  ___  ____ ___ _     _____
//   |  \/  |/ _ \| __ )_ _| |   | ____|
//   | |\/| | | | |  _ \| || |   |  _|
//   | |  | | |_| | |_) | || |___| |___
//   |_|  |_|\___/|____/___|_____|_____|
//



//     _____     _______ ____  ____  ___ ____  _____
//    / _ \ \   / / ____|  _ \|  _ \|_ _|  _ \| ____|
//   | | | \ \ / /|  _| | |_) | |_) || || | | |  _|
//   | |_| |\ V / | |___|  _ <|  _ < | || |_| | |___
//    \___/  \_/  |_____|_| \_\_| \_\___|____/|_____|
//




/**
 * @override
 * @inheritDoc
 */
sagewest.page.Home.prototype.update_page_layout = function() {

  sagewest.page.Home.superClass_.update_page_layout.call(this);


  this.window_width = this.window.width();
  this.window_height = this.window.height();

  // zoom check
  if (this.window_width <= 1280 && manic.IS_ACTUAL_MOBILE == false ||
      manic.IS_ACTUAL_MOBILE == true && manic.IS_TABLET_LANDSCAPE) {
    this.window_width *= 1.1111;
    this.window_height *= 1.1111;
  }


};


/**
 * @override
 * @inheritDoc
 */
sagewest.page.Home.prototype.scroll_to_target = function(str_param, str_param_2, str_param_3) {
  sagewest.page.Home.superClass_.scroll_to_target.call(this, str_param);

  /*
  // Mice venue landing - on hash change
  if(manic.IS_MOBILE == true && this.is_mice_venue_landing == true){

    // console.log('str_param: ' + str_param);
    if (str_param == "indoor-venue") {
      this.mice_landing_mobile_indoor_open();

    } else if (str_param == "outdoor-venue") {
      this.mice_landing_mobile_outdoor_open();

    } else if (str_param == "ballrooms-venue") {
      this.mice_landing_mobile_ballrooms_open();
    }

  }
  */

};
/**
 * @override
 * @inheritDoc
 */
sagewest.page.Home.prototype.on_scroll_to_no_target = function(){

  // Mice venue landing
  /*
  if(manic.IS_MOBILE == true && this.is_mice_venue_landing == true){
    // console.log('go home!!');
    this.mice_landing_mobile_both_close();
  }
  */

};


//    _______     _______ _   _ _____ ____
//   | ____\ \   / / ____| \ | |_   _/ ___|
//   |  _|  \ \ / /|  _| |  \| | | | \___ \
//   | |___  \ V / | |___| |\  | | |  ___) |
//   |_____|  \_/  |_____|_| \_| |_| |____/
//



//    _   _ _____ ___ _
//   | | | |_   _|_ _| |
//   | | | | | |  | || |
//   | |_| | | |  | || |___
//    \___/  |_| |___|_____|
//


goog.exportSymbol('sagewest.page.Home', sagewest.page.Home);
