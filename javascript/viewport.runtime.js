// Generated by CoffeeScript 1.4.0

/*
   Generating Viewport Details
   Simon Fraser <http://simonf.co.uk> [@symatree]
   CoffeeScript Experiment
*/


/*
   Function to Return sizes
*/


(function() {
  var viewportsize;

  viewportsize = function() {
    var heightIs, widthIs;
    widthIs = window.innerWidth;
    heightIs = window.innerHeight;
    return $('.hero').html("<h1>" + widthIs + " x " + heightIs + "</h1>");
  };

  /*
     Some jQuery Runtime
  */


  viewportsize();

  $(window).resize(function() {
    return viewportsize();
  });

}).call(this);
