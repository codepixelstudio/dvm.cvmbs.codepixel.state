
// ================================================================================
// START :: require + modules + dependencies
// ================================================================================

    // jQuery
    import $ from 'jquery';

    // site.object
    import { site, log } from './../dvm.app';

// ================================================================================
// END :: require + modules + dependencies
// ================================================================================



// ================================================================================
// START :: globals
// ================================================================================

    var views = [];

// ================================================================================
// END :: globals
// ================================================================================



// ================================================================================
// START :: load.directory                                        EXPORT
// ================================================================================

export var dataUI = {

    // register script + define globals
    init: function ( render ) {

        // check in
        console.log(

            '%c[ %cdataUI %c] %cscript%c.%cinitialized',
            log.brack, log.activ, log.brack, log.init, log.brack, log.brite

        );

        // directory method
        dataUI.builder();

    },

    // directory method
    directory: function( render ) {

        $.ajax({

            dataType: 'xml',

            // return items
            url: 'http://www.cvmbs.colostate.edu/directoryservice/DirectoryService.svc?wsdl',

            type: 'GET',

            error : function ( jqXHR, responseText ) {

                console.log( jqXHR.statusText );

                var emptyNews = '';
                var newsError = '';
                var signal = null;

                if ( jqXHR.status === 0 ) {

                    newsError = 'There was a problem loading news content.';

                } else if ( jqXHR.status === 404 ) {

                    newsError = 'Resource not found [404]';

                } else if ( jqXHR.status === 500 ) {

                    newsError = 'Internal Server Error [505]';

                } else if ( exception === 'parserror' ) {

                    newsError = 'JSON parse failed';

                } else if ( exception === 'timeout' ) {

                    newsError = 'Request timed out.';

                } else if ( exception === 'abort' ) {

                    newsError = 'Search connection aborted.';

                } else {

                    newsError = 'Configuration error.';

                }

            },

            success: function( response ) {

                // confirm response
                console.log( '%csuccessfully connected to LocalHR', log.callb );

                $.each( response, function( index ) {

                    //

                });

            }

        });

    },

    // builder
    builder: function( render ) {

        function reqListener () {

            console.log( this.responseText );

        }

        // var oReq = new XMLHttpRequest();
        // oReq.addEventListener( 'load', reqListener );
        // oReq.open( 'GET', 'http://www.cvmbs.colostate.edu/directoryservice/DirectoryService.svc?wsdl');
        // oReq.send();

        var url = 'http://www.cvmbs.colostate.edu/directoryservice/DirectoryService.svc?wsdl';

        function createCORSRequest( method, url ) {

            var xhr = new XMLHttpRequest();

            if ( 'withCredentials' in xhr) {

                // Check if the XMLHttpRequest object has a "withCredentials" property.
                // "withCredentials" only exists on XMLHTTPRequest2 objects.
                xhr.open( method, url, true );

                // console.log( 'go fuck yourself' );

            } else if (typeof XDomainRequest != "undefined") {

                // Otherwise, check if XDomainRequest.
                // XDomainRequest only exists in IE, and is IE's way of making CORS requests.
                xhr = new XDomainRequest();
                xhr.open(method, url);

                // console.log( 'go fuck yourself' );

            } else {

                // Otherwise, CORS is not supported by the browser.
                xhr = null;

                // console.log( 'go fuck yourself' );

            }

            console.log( xhr );

            return xhr;

        }

        var xhr = createCORSRequest( 'GET', url );

        xhr.send();

        if ( !xhr ) {

            throw new Error('CORS not supported');

            console.log( 'ball so hard' );

        }

    }

};

// ================================================================================
// END :: load.directory
// ================================================================================
