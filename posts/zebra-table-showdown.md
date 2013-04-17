As a follow-up to the previous [event selector
showdown](http://blog.jquery.com/2006/04/29/event-selector-showdown/)
comes a new **Zebra Table Showdown**.

### The Challenge:

Making all tables on a page have striped ("Zebra") backgrounds
(different coloring on every odd row). **The Rules:**

-   The odd/even styling should be done by adding a class for the 'odd'
    numbered table rows.
-   This must be able to work on multiple tables. (It's not as simple as
    finding all rows then going through every odd one, otherwise an even
    row could become highlighted in the next table).
-   The code should be done as elegantly as possible, using as much of a
    libraries' functionality as possible. Speed is not an issue.

**Intended Result:**
![zebra-fig1.gif](http://blog.jquery.com/wp-content/uploads/2006/10/zebra-fig1.gif)

#### Plain DOM Scripting: ([demo](http://jquery.com/files/stripe/dom/))

    var tables = document.getElementsByTagName("table");
    for ( var t = 0; t < tables.length; t++ ) {
      var rows = tables[t].getElementsByTagName("tr");
      for ( var i = 1; i < rows.length; i += 2 )
        if ( !/(^|\s)odd(\s|$)/.test( rows[i].className ) )
          rows[i].className += " odd";
    }

Note: This includes a check to make sure that the 'odd' class doesn't
already exist on the table row. This is taken care of by all modern
libraries.

#### [Yahoo UI](http://developer.yahoo.net/yui/): ([demo](http://jquery.com/files/stripe/yui/))

    var tables = document.getElementsByTagName("table");
    for ( var t = 0; t < tables.length; t++ ) {
      var rows = tables[t].getElementsByTagName("tr");
      for ( var i = 1; i < rows.length; i += 2 )
        YAHOO.util.Dom.addClass( rows[i], "odd" );
    }

Note: Although, their own developer site
[disagrees](http://developer.yahoo.com/zebra.js).

#### [Dojo](http://dojotoolkit.org/): ([demo](http://jquery.com/files/stripe/dojo/))

    var each = dojo.lang.forEach;

    each(document.getElementsByTagName("table"), function(table){
      each(table.getElementsByTagName("tr"), function(row,i){
        if ( i % 2 == 1 )
          dojo.html.addClass( row, "odd" );
      });
    });

Note: A common function was assigned to a variable in order to make the
code shorter.

#### [Prototype (1.4.0)](http://prototype.conio.net/): ([demo](http://jquery.com/files/stripe/proto14/))

    $A(document.getElementsByTagName("table")).each(function(table){
      $A(table.getElementsByTagName("tr")).each(function(row,i){
        if ( i % 2 == 1 )
          Element.addClassName( row, "odd" );
      });
    });

#### [Mochikit](http://mochikit.com/): ([demo](http://jquery.com/files/stripe/mochi/))

    var byTag = getElementsByTagAndClassName;

    forEach( byTag("table"), function(table) {
      var rows = byTag( "tr", null, table );
      for ( var i = 1; i < rows.length; i += 2 )
        addElementClass( rows[i], "odd" );
    });

Note: A common function was assigned to a variable in order to make the
code shorter.

#### [Prototype (1.5.0)](http://dev.rubyonrails.org/browser/spinoffs/prototype/): ([demo](http://jquery.com/files/stripe/proto15/))

    $$("table").each(function(table){
      Selector.findChildElements(table, ["tr"])
        .findAll(function(row,i){ return i % 2 == 1; })
        .invoke("addClassName", "odd");
    });

#### [mootools](http://mootools.net/): ([demo](http://jquery.com/files/stripe/moo/))

    $$("table").each(function(table){
      $ES("tr", table).each(function(row,i){
        if ( i % 2 == 1 )
          row.addClass( "odd" );
      });
    });

#### [jQuery](http://jquery.com/): ([demo](http://jquery.com/files/stripe/jquery/))

    $("tr:nth-child(odd)").addClass("odd");

If you feel as if you have a more elegant solution than the ones posted
here, please post them below so that the listing can be updated.

* * * * *

### New Submissions:

These are new entries that have been submitted by other readers.

#### [AJS](http://orangoo.com/labs/AmiNation/AJS/): ([demo](http://jquery.com/files/stripe/ajs/))

    AJS.map(AJS.$bytc("table"), function(table) {
     AJS.map(AJS.$bytc("tr", null, table), function(row, i) {
       if ( i % 2 == 1 && !/(^|\s)odd(\s|$)/.test( row.className ) )
         AJS.setClass( row, "odd" );
     });

    Prototype 1.5.1: (demo)

    $$('tr:nth-child(odd)').invoke('addClassName', 'odd');
