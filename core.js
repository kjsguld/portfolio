// Move to #something link with offset
// http://stackoverflow.com/questions/17534661/make-anchor-link-go-some-pixels-above-where-its-linked-to
// The function actually applying the offset
function offsetAnchor() {
  if (location.hash.length !== 0) {
    window.scrollTo(window.scrollX, window.scrollY - 100);
  }
}

// This will capture hash changes while on the page
window.addEventListener("hashchange", offsetAnchor);

// This is here so that when you enter the page with a hash,
// it can provide the offset in that case too. Having a timeout
// seems necessary to allow the browser to jump to the anchor first.
window.setTimeout(offsetAnchor, 1); // The delay of 1 is arbitrary and may not always work right (although it did in my testing).


// typed.js
jQuery(document).ready(function($){

  $("#typed").typed({
      // strings: ["Typed.js is a <strong>jQuery</strong> plugin.", "It <em>types</em> out sentences.", "And then deletes them.", "Try it out!"],
      stringsElement: $('#typed-strings'),
      typeSpeed: 60,
      backDelay: 1500,
      loop: false,
      contentType: 'html', // or text
      // defaults to false for infinite loop
      loopCount: false,
      callback: function(){ foo(); },
      resetCallback: function() { newTyped(); }
  });

  $(".reset").click(function(){
      $("#typed").typed('reset');
  });

});
