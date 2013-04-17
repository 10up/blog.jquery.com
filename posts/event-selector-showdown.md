**Simple Challenge:** Find all the LI elements underneath two different
elements (using their \#ID as reference) and bind a click handler which
changes the color of the LI's text. Here is how you would do that in all
of the popular event/selector libraries.

### [Behaviour](http://bennolan.com/behaviour/) + [Prototype](http://prototype.conio.net)

    Behaviour.register({
      '#item li': function(element) {
        Event.observe(element, 'click', function(event) {
          Event.element(element).setStyle({color: '#c00'});
        });
      },
        
      '#otheritem li': function(element) {
        Event.observe(element, 'click', function(event) {
          Event.element(element).setStyle({color: '#c00'});
        });
      }
    });

### [Prototype 1.5.0](http://dev.rubyonrails.org/browser/trunk/railties/html/javascripts/prototype.js)

    $$('#item li, #otheritem li').each(function(li){
      Event.observe(li, 'click', function(event) {
        Event.element(li).setStyle({color: '#c00'});
      });
    });

### [event:Selectors](http://encytemedia.com/event-selectors/)

    EventSelectors.start({
      '#item li:click, #otheritem li:click': function(){
        this.setStyle({'color': '#c00'});
      }
    });

### [jQuery](http://jquery.com/)

    $("#item li, #otheritem li").click(function(){
      $(this).css('color', '#c00');
    });

I like to think that the code speaks for itself, as to which one is the
easiest to use and understand. I find it interesting how Prototype is
[migrating](http://encytemedia.com/blog/articles/2006/03/07/prototype-gets-some-serious-syntactic-sugar)
closer to what jQuery has now - while jQuery itself is blasting away
with some very cool new stuff. Definitely keep your eyes peeled for new
releases, as they'll be coming soon.
