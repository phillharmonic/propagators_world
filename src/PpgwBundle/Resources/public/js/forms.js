//   web/js
$(document).ready(function(){  

    var $collectionHolder;

    // setup an "add a picture" link
    var $addPictureLink = $('<a href="#" class="add_picture_link">Add another Picture</a>');
    var $newLinkDiv = $('<div></div>').append($addPictureLink);

    jQuery(document).ready(function() {
        // Get the div that holds the collection of pictures
        $collectionHolder = $('div.images');

        // add a delete link to each section of existing picture objects
        $collectionHolder.find('section').each(function() {
            addPictureFormDeleteLink($(this));
        });

        // add the "add a picture" anchor and div to the picture div
        $collectionHolder.append($newLinkDiv);

        // count the current form inputs we have (e.g. 2), use that as the new
        // index when inserting a new item (e.g. 2)
        $collectionHolder.data('index', $collectionHolder.find(':input').length);

        $addPictureLink.on('click', function(e) {
            // prevent the link from creating a "#" on the URL
            e.preventDefault();

            // add a new tag form (see next code block)
            addPictureForm($collectionHolder, $newLinkDiv);
        });
    });

    function addPictureForm($collectionHolder, $newLinkDiv) {
        // Get the data-prototype explained earlier
        var prototype = $collectionHolder.data('prototype');

        // get the new index
        var index = $collectionHolder.data('index');

        // Replace '__name__' in the prototype's HTML to
        // instead be a number based on how many items we have
        var newForm = prototype.replace(/__name__/g, index);

        // increase the index with one for the next item
        $collectionHolder.data('index', index + 1);

        // Display the form in the page in a div, before the "Add a Picture" link div
        var $newFormDiv = $('<div></div>').append(newForm);
        $newLinkDiv.before($newFormDiv);
        
    }

    function addPictureFormDeleteLink($pictureFormDiv) {
        var $removeFormA = $('<a href="#" class="delete_picture_link" >Delete this Picture</a>');
        $pictureFormDiv.append($removeFormA);

        $removeFormA.on('click', function(e) {
            // prevent the link from creating a "#" on the URL
            e.preventDefault();

            // remove the div for the picture form
            $pictureFormDiv.remove();
        });
    }

});