###
   Generating Viewport Details
   Simon Fraser <http://simonf.co.uk> [@symatree]
   CoffeeScript Experiment
###

###
   Function to Return sizes
###
viewportsize = () ->
   # The Window Variables
   widthIs  = window.innerWidth
   heightIs = window.innerHeight
   # Return this and Append to our Hero Display
   $('.hero').html "<h1>" + widthIs + " x " + heightIs + "</h1>"


###
   Some jQuery Runtime
###
# $ ->
viewportsize()

$(window).resize ->
   viewportsize()