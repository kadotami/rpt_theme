SpSlidemenu({
  main : '#main',
  button: '.menu-button-left',
  slidemenu : '.slidemenu-left',
  direction: 'left'
});
window.onload = ()=>
  @divObj = new fx.Scroll(null, { duration:1000 });
@pageScroll = (el)=>
  @divObj.scrollTo(el)