(function() {
  SpSlidemenu({
    main: '#main',
    button: '.menu-button-left',
    slidemenu: '.slidemenu-left',
    direction: 'left'
  });

  window.onload = (function(_this) {
    return function() {
      return _this.divObj = new fx.Scroll(null, {
        duration: 1000
      });
    };
  })(this);

  this.pageScroll = (function(_this) {
    return function(el) {
      return _this.divObj.scrollTo(el);
    };
  })(this);

}).call(this);
