###
Generating Viewport Details
Simon Fraser <http://simonf.co.uk> [@symatree]
CoffeeScript Experiment
###

# Function to display details on screen
viewportsize = () ->
   # The Window Variables
   widthIs  = window.innerWidth
   heightIs = window.innerHeight
   
   # Append to our Hero Display
   $('.js-dimensions [role="dynamic"]').html widthIs + " x " + heightIs

   # Send an aJax command to retrieve our system environment details
   $.ajax 
      url: 'system.php',
      dataType: 'json',
      success : (environment_data) ->
         # Create a string for the Browser
         browser_string = environment_data.browser.name + ' ' + environment_data.browser.majorver 
         
         # Limit Minor Version data, if its really not needed
         if environment_data.browser.minorver!='' && environment_data.browser.minorver!='0'
            browser_string += '.' + environment_data.browser.minorver
         
         # Create a string for the OS
         os_string = ' On ' + environment_data.os
         
         # Append our data
         $('.js-environment [role="dynamic"]').html browser_string + os_string

# Run on load
viewportsize()

# Run again on window resize
# Also the case for orentation change
$(window).resize ->
   viewportsize()