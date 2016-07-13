<!DOCTYPE html>
<html>
<head>
    <title>BundesLiga Leaderboard</title>
    <meta name="google" content="notranslate"/>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,700" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 300;
            font-family: 'Lato';
        }

        .title {
            font-size: 96px;
            font-weight: 300 !important;
            text-align: center;
        }

        table {
            width: 100%;
            margin: 30px 0;
        }

        table tr, table th {
            max-height: 60px;
            text-align: center;
        }

        table th {
            text-transform: uppercase;
            font-weight: 700;
        }

        table tr img {
            height: 50px;
            width: 50px;
            margin: 15px 0;

        }

        table tr td.crest {
            width: 80px;
        }

        table tr td:nth-of-type(2), table tr th:nth-of-type(2) {
            text-align: left;
            font-weight: 700
        }

        table tbody tr:hover {
            cursor: pointer;
            background: #eeeeee;
        }

        table tr {
            border-bottom: 1px solid #bababa;
        }

        .modal-body {
            min-height: 300px;
            padding-top: 20px;
        }

        .modal-body h1, .modal-body h3 {
            padding-top: 0;
            margin-top: 0;
            text-align: center;
        }

        .options {
            margin-bottom: 15px;
            text-align: center;
        }

        .match-added {
            position: fixed;
            z-index: 100;
            top: -100px;
            transition: top 0.4s ease-in;
            width: 70%;
            left: 0;
            right: 0;
            text-align: center;
            margin: 0 auto;
        }

        .match-added.appear {
            top: 100px;
            transition: top 0.4s ease-out;
        }
    </style>
</head>
<body>
<div class="container">

    <div class="match-added alert alert-success" role="alert">
        <strong><p>Match added successfully</p></strong>
    </div>


    <div class="row">
        <h1 class="title">BundesLiga Leaderboard</h1>
    </div>
    <div class="row">
        <table>
            <thead>
            <tr>
                <th class="crest"></th>
                <th class="sortable">Team Name <span class="tablesorter-icon"></span></th>
                <th class="sortable">Won <span class="tablesorter-icon"></span></th>
                <th class="sortable">Drew <span class="tablesorter-icon"></span></th>
                <th class="sortable">Lost <span class="tablesorter-icon"></span></th>
                <th class="sortable">Points <span class="tablesorter-icon"></span></th>
            </tr>
            </thead>
            <tbody>
            @foreach($teams as $position => $team)
                <tr id="team-{{$team->team_id}}" data-info="{{$team->info}}" data-website="{{$team->website}}"
                    data-name="{{$team->team_name}}"
                    data-stats="{{$team->won}},{{$team->lost}},{{$team->drew}},{{$team->points}}">
                    <td class="crest" id="{{$team->team_id}}-crest"><img src="/crests/{{$team->team_id}}.jpg" alt="">
                    </td>
                    <td id="{{$team->team_id}}-name">{{$team->team_name}}</td>
                    <td id="{{$team->team_id}}-won">{{$team->won}}</td>
                    <td id="{{$team->team_id}}-drew">{{$team->drew}}</td>
                    <td id="{{$team->team_id}}-lost">{{$team->lost}}</td>
                    <td id="{{$team->team_id}}-points">{{$team->points}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <div class="col-md-12 options">

            <a href="/" class="btn btn-default btn-lg">Home</a>

            <button type="button" id="add-button" class="btn btn-primary btn-lg" data-toggle="modal"
                    data-target="#add-match">
                Add match result
            </button>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>

<div class="modal fade" tabindex="-1" role="dialog" id="add-match">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form>

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Add Result</h4>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-danger" role="alert" style="visibility: hidden">
                                <p></p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <h3>Home Team</h3>
                        </div>
                        <div class="col-sm-6">
                            <h3>Away Team</h3>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-3">
                            <select name="team1" class="form-control" required id="team1">
                                <option value=""></option>
                                @foreach($teams as $team)
                                    <option value="{{$team->team_id}}">{{$team->team_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-xs-2">
                            <input type="number" placeholder="Score" min="0" class="score form-control" required="true"
                                   id="score1">
                        </div>

                        <div class="col-xs-2">
                            <h1>V</h1>
                        </div>

                        <div class="col-xs-2">
                            <input type="number" placeholder="Score" min="0" class="score form-control" required="true"
                                   id="score2">
                        </div>

                        <div class="col-xs-3">
                            <select name="team1" class="form-control" required id="team2">
                                <option value=""></option>
                                @foreach($teams as $team)
                                    <option value="{{$team->team_id}}">{{$team->team_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" id="save-result" class="btn btn-primary">Save result</button>
                </div>
            </form>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="modal fade" tabindex="-1" role="dialog" id="team-info">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form>

                <div class="modal-header">
                    <h1></h1>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img class="team-crest img-responsive" src="" alt="">
                            <div class="stats">
                                <br>
                                <p><strong>Won: </strong> <span class="won"></span></p>
                                <p><strong>Drew: </strong> <span class="drew"></span></p>
                                <p><strong>Lost: </strong> <span class="lost"></span></p>
                                <p><strong>Points: </strong> <span class="Points"></span></p>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <p class="info"></p>
                            <a href="" class="website"></a>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script src="/jquery.tablesorter.js"></script>
<script>

    var errorAlert = $('.alert-danger');

    $('.form-control').change(function () {
        errorAlert.css('visibility', 'hidden');
    });

    $('#save-result').on('click', function (event) {
        event.preventDefault();

        var homeTeam, homeScore, awayTeam, awayScore;

        homeTeam = $('#team1')[0].value;
        homeScore = $('#score1')[0].value;
        awayTeam = $('#team2')[0].value;
        awayScore = $('#score2')[0].value;

        if (homeTeam === awayTeam || homeTeam == '' || awayTeam == '') {
            showError('teams');
            return;
        }

        if (homeScore == '' || awayScore == '' || +homeScore < 0 || +awayScore < 0) {
            showError('scores');
            return;
        }

        $.ajax({
            method: 'POST',
            url: '/teams',
            data: {
                homeTeam: homeTeam,
                homeScore: homeScore,
                awayTeam: awayTeam,
                awayScore: awayScore
            }
        }).done(function (data) {
            console.log(data);
            updateTeams(data);
            $('#add-match').modal('hide');
            matchAdded();
            $( 'table' ).trigger( 'update');
            $('form').trigger('reset');
        });
    });

    function showError(type) {
        var message;
        if (type == 'teams') {
            message = "<p>Please make sure you have made a valid team selection.</p>";
        } else {
            message = "<p>Please make sure you have entered a valid score.</p>";
        }

        errorAlert[0].innerHTML = message;

        errorAlert.css('visibility', 'visible');
    }

    function updateTeams(teams) {
        teams.forEach(function (team, i) {
            $('#' + team.team_id + '-won')[0].innerHTML = team.won;
            $('#' + team.team_id + '-lost')[0].innerHTML = team.lost;
            $('#' + team.team_id + '-drew')[0].innerHTML = team.drew;
            $('#' + team.team_id + '-points')[0].innerHTML = team.points;
        });
    }

    var matchAdded = function () {
        $('.match-added').addClass('appear');
        setTimeout(function () {
            $('.match-added').removeClass('appear');

        }, 3000)
    };

    /* Documentation for this tablesorter FORK can be found at
     * http://mottie.github.io/tablesorter/docs/
     */
    $(function () {
        $('table').tablesorter({

            // fix the column widths
            widthFixed: true,

            // Show an indeterminate timer icon in the header when the table
            // is sorted or filtered
            showProcessing: false,

            // header layout template (HTML ok); {content} = innerHTML,
            // {icon} = <i/> (class from cssIcon)
            headerTemplate: '{content}{icon}',

            // return the modified template string
            onRenderTemplate: null, // function(index, tmpl){ return tmpl; },

            // *** FUNCTIONALITY ***
            // prevent text selection in header
            cancelSelection: true,

            // add tabindex to header for keyboard accessibility
            tabIndex: false,

            // other options: "ddmmyyyy" & "yyyymmdd"
            dateFormat: "mmddyyyy",

            // The key used to select more than one column for multi-column
            // sorting.
            sortMultiSortKey: "shiftKey",

            // key used to remove sorting on a column
            sortResetKey: 'ctrlKey',

            // false for German "1.234.567,89" or French "1 234 567,89"
            usNumberFormat: true,

            // If true, parsing of all table cell data will be delayed
            // until the user initializes a sort
            delayInit: false,

            // if true, server-side sorting should be performed because
            // client-side sorting will be disabled, but the ui and events
            // will still be used.
            serverSideSorting: false,

            // default setting to trigger a resort after an "update",
            // "addRows", "updateCell", etc has completed
            resort: true,

            // *** SORT OPTIONS ***
            // These are detected by default,
            // but you can change or disable them
            // these can also be set using data-attributes or class names
            headers: {
                // set "sorter : false" (no quotes) to disable the column
                0: {
                    sorter: "text"
                },
                1: {
                    sorter: "text"
                }
            },

            // ignore case while sorting
            ignoreCase: true,

            // forces the user to have this/these column(s) sorted first
            sortForce: null,
            // initial sort order of the columns,
            // example sortList: [[0,0],[1,0]],
            // [[columnIndex, sortDirection], ... ]
            sortList: null,
            // default sort that is added to the end of the users sort
            // selection.
            sortAppend: null,

            // when sorting two rows with exactly the same content,
            // the original sort order is maintained
            sortStable: false,

            // starting sort direction "asc" or "desc"
            sortInitialOrder: "asc",

            // Replace equivalent character (accented characters) to allow
            // for alphanumeric sorting
            sortLocaleCompare: false,

            // third click on the header will reset column to default - unsorted
            sortReset: true,

            // restart sort to "sortInitialOrder" when clicking on previously
            // unsorted columns
            sortRestart: false,

            // sort empty cell to bottom, top, none, zero, emptyMax, emptyMin
            emptyTo: "bottom",

            // sort strings in numerical column as max, min, top, bottom, zero
            stringTo: "max",

            // colspan cells in the tbody will have duplicated content in the
            // cache for each spanned column
            duplicateSpan: true,

            // extract text from the table
            textExtraction: {
                0: function (node, table) {
                    // this is how it is done by default
                    return $(node).attr(table.config.textAttribute) ||
                            node.textContent ||
                            node.innerText ||
                            $(node).text() ||
                            '';
                },
                1: function (node) {
                    return $(node).text();
                }
            },

            // data-attribute that contains alternate cell text
            // (used in default textExtraction function)
            textAttribute: 'data-text',

            // use custom text sorter
            // function(a,b){ return a.sort(b); } // basic sort
            textSorter: null,

            // choose overall numeric sorter
            // function(a, b, direction, maxColumnValue)
            numberSorter: null,

            // *** WIDGETS ***
            // apply widgets on tablesorter initialization
            initWidgets: true,

            // table class name template to match to include a widget
            widgetClass: 'widget-{name}',

            // include zebra and any other widgets, options:
            // 'columns', 'filter', 'stickyHeaders' & 'resizable'
            // 'uitheme' is another widget, but requires loading
            // a different skin and a jQuery UI theme.
            widgets: ['zebra', 'columns'],

            widgetOptions: {

                // *** COLUMNS WIDGET ***
                // change the default column class names primary is the 1st column
                // sorted, secondary is the 2nd, etc
                columns: [
                    "primary",
                    "secondary",
                    "tertiary"
                ],

                // If true, the class names from the columns option will also be added
                // to the table tfoot
                columns_tfoot: true,

                // If true, the class names from the columns option will also be added
                // to the table thead
                columns_thead: true,

                // *** FILTER WIDGET ***
                // css class name added to the filter cell (string or array)
                filter_cellFilter: '',

                // If there are child rows in the table (rows with class name from
                // "cssChildRow" option) and this option is true and a match is found
                // anywhere in the child row, then it will make that row visible;
                // default is false
                filter_childRows: false,

                // ( filter_childRows must be true ) if true = search
                // child rows by column; false = search all child row text grouped
                filter_childByColumn: false,

                // if true, include matching child row siblings
                filter_childWithSibs: true,

                // if true, allows using '#:{query}' in AnyMatch searches
                // ( column:query )
                filter_columnAnyMatch: true,

                // If true, a filter will be added to the top of each table column.
                filter_columnFilters: true,

                // css class name added to the filter row & each input in the row
                // (tablesorter-filter is ALWAYS added)
                filter_cssFilter: '',

                // data attribute in the header cell that contains the default (initial)
                // filter value
                filter_defaultAttrib: 'data-value',

                // add a default column filter type "~{query}" to make fuzzy searches
                // default; "{q1} AND {q2}" to make all searches use a logical AND.
                filter_defaultFilter: {},

                // filters to exclude, per column
                filter_excludeFilter: {},

                // jQuery selector string (or jQuery object)
                // of external filters
                filter_external: '',

                // class added to filtered rows; needed by pager plugin
                filter_filteredRow: 'filtered',

                // add custom filter elements to the filter row
                filter_formatter: null,

                // Customize the filter widget by adding a select dropdown with content,
                // custom options or custom filter functions;
                // see http://goo.gl/HQQLW for more details
                filter_functions: null,

                // hide filter row when table is empty
                filter_hideEmpty: true,

                // Set this option to true to hide the filter row initially. The row is
                // revealed by hovering over the filter row or giving any filter
                // input/select focus.
                filter_hideFilters: false,

                // Set this option to false to keep the searches case sensitive
                filter_ignoreCase: true,

                // if true, search column content while the user types (with a delay)
                // or, set a minimum number of characters that must be present before
                // a search is initiated
                filter_liveSearch: true,

                // global query settings ('exact' or 'match'); overridden by
                // "filter-match" or "filter-exact" class
                filter_matchType: {
                    'input': 'exact',
                    'select': 'exact'
                },

                // a header with a select dropdown & this class name will only show
                // available (visible) options within the drop down
                filter_onlyAvail: 'filter-onlyAvail',

                // default placeholder text (overridden by any header
                // "data-placeholder" setting)
                filter_placeholder: {
                    search: '',
                    select: ''
                },

                // jQuery selector string of an element used to reset the filters.
                filter_reset: null,

                // Reset filter input when the user presses escape
                // normalized across browsers
                filter_resetOnEsc: true,

                // Use the $.tablesorter.storage utility to save the most recent filters
                filter_saveFilters: false,

                // Delay in milliseconds before the filter widget starts searching;
                // This option prevents searching for every character while typing
                // and should make searching large tables faster.
                filter_searchDelay: 300,

                // allow searching through already filtered rows in special
                // circumstances; will speed up searching in large tables if true
                filter_searchFiltered: true,

                // include a function to return an array of values to be added to the
                // column filter select
                filter_selectSource: null,

                // filter_selectSource array text left of the separator is added to
                // the option value, right into the option text
                filter_selectSourceSeparator: '|',

                // Set this option to true if filtering is performed on the
                // server-side.
                filter_serversideFiltering: false,

                // Set this option to true to use the filter to find text from the
                // start of the column. So typing in "a" will find "albert" but not
                // "frank", both have a's; default is false
                filter_startsWith: false,

                // If true, ALL filter searches will only use parsed data. To only
                // use parsed data in specific columns, set this option to false
                // and add class name "filter-parsed" to the header
                filter_useParsedData: false,

                // *** RESIZABLE WIDGET ***
                // If this option is set to false, resized column widths will not
                // be saved. Previous saved values will be restored on page reload
                resizable: false,

                // If this option is set to true, a resizing anchor
                // will be included in the last column of the table
                resizable_addLastColumn: false,

                // Set this option to the starting & reset header widths
                resizable_widths: [],

                // Set this option to throttle the resizable events
                // set to true (5ms) or any number 0-10 range
                resizable_throttle: false,

                // When true, the last column will be targeted for resizing,
                // which is the same has holding the shift and resizing a column
                resizable_targetLast: false,

                // *** SAVESORT WIDGET ***
                // If this option is set to false, new sorts will not be saved.
                // Any previous saved sort will be restored on page reload.
                saveSort: true,

                // *** STICKYhEADERS WIDGET ***
                // stickyHeaders widget: extra class name added to the sticky header
                // row
                stickyHeaders: '',

                // jQuery selector or object to attach sticky header to
                stickyHeaders_attachTo: null,

                // jQuery selector or object to monitor horizontal scroll position
                // (defaults: xScroll > attachTo > window)
                stickyHeaders_xScroll: null,

                // jQuery selector or object to monitor vertical scroll position
                // (defaults: yScroll > attachTo > window)
                stickyHeaders_yScroll: null,

                // number or jquery selector targeting the position:fixed element
                stickyHeaders_offset: 0,

                // scroll table top into view after filtering
                stickyHeaders_filteredToTop: true,

                // added to table ID, if it exists
                stickyHeaders_cloneId: '-sticky',

                // trigger "resize" event on headers
                stickyHeaders_addResizeEvent: true,

                // if false and a caption exist, it won't be included in the
                // sticky header
                stickyHeaders_includeCaption: true,

                // The zIndex of the stickyHeaders, allows the user to adjust this
                // to their needs
                stickyHeaders_zIndex: 2,

                // *** STORAGE WIDGET ***
                // allows switching between using local & session storage
                storage_useSessionStorage: false,
                // alternate table id (set if grouping multiple tables together)
                storage_tableId: '',
                // table attribute to get the table ID, if storage_tableId
                // is undefined
                storage_group: '', // defaults to "data-table-group"
                // alternate url to use (set if grouping tables across
                // multiple pages)
                storage_fixedUrl: '',
                // table attribute to get the fixedUrl, if storage_fixedUrl
                // is undefined
                storage_page: '',

            },

            // *** CALLBACKS ***
            // function called after tablesorter has completed initialization
            initialized: null, // function (table) {}

            // *** extra css class names
            tableClass: '',
            cssAsc: '',
            cssDesc: '',
            cssNone: '',
            cssHeader: '',
            cssHeaderRow: '',
            // processing icon applied to header during sort/filter
            cssProcessing: '',

            // class name indiciating that a row is to be attached to its
            // parent
            cssChildRow: 'tablesorter-childRow',
            // don't sort tbody with this class name
            // (only one class name allowed here!)
            cssInfoBlock: 'tablesorter-infoOnly',
            // class name added to element inside header; clicking on it
            // won't cause a sort
            cssNoSort: 'tablesorter-noSort',
            // header row to ignore; cells within this row will not be added
            // to table.config.$headers
            cssIgnoreRow: 'tablesorter-ignoreRow',

            // if this class does not exist, the {icon} will not be added from
            // the headerTemplate
            cssIcon: 'tablesorter-icon',
            // class name added to the icon when there is no column sort
            cssIconNone: '',
            // class name added to the icon when the column has an ascending sort
            cssIconAsc: 'glyphicon glyphicon-menu-up',
            // class name added to the icon when the column has a descending sort
            cssIconDesc: 'glyphicon glyphicon-menu-down',

            // *** header events ***
            pointerClick: 'click',
            pointerDown: 'mousedown',
            pointerUp: 'mouseup',

            // *** SELECTORS ***
            // jQuery selectors used to find the header cells.
            selectorHeaders: '> thead th.sortable, > thead td',

            // jQuery selector of content within selectorHeaders
            // that is clickable to trigger a sort.
            selectorSort: "th, td",

            // *** DEBUGING ***
            // send messages to console
            debug: false

        });
    });

    $('tbody tr').click(function () {
        var teamId = $(this)[0].id.replace('team-', '');
        console.log('here');
        var teamInfo = $(this).data('info');
        var teamWeb = $(this).data('website');
        var teamName = $(this).data('name');
        var stats = $(this).data('stats').split(',');

        console.log(teamName);

        $('#team-info .modal-header h1').text(teamName);
        $('#team-info .team-crest')[0].setAttribute('src', 'crests/' + teamId + '.jpg');
        $('#team-info p.info').text(teamInfo);
        $('#team-info a.website').text(teamName + ' website');
        $('#team-info a.website')[0].setAttribute('href', teamWeb);
        $('#team-info .stats .won').text(stats[0]);
        $('#team-info .stats .lost').text(stats[1]);
        $('#team-info .stats .drew').text(stats[2]);
        $('#team-info .stats .points').text(stats[3]);

        $('#team-info').modal('show');
    });

</script>
</html>
