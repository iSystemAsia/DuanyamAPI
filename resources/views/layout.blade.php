<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/litepicker/dist/css/style.css">
        <link rel="stylesheet" href="/css/style.css">
        <title>{{ $title }}</title>
    </head>
    <body style='font-family:"Bpmonline";'>
        <div class="box box-custom">

            <div class="loader-wrapper">
                <div class="loader is-loading"></div>
            </div>

            <div class="columns">
                <div class="column is-four-fifths">
                    <div class="control">    
                        <div class="field is-horizontal">
                            <p class="subtitle has-text-success pr-3">{{ $title }}</p>
                            <div class="field pr-3">
                                <div class="select is-small is-rounded">
                                    <select id="select-filter">
                                        <option selected disabled>Pilih filter</option>
                                        @foreach ($filters as $filter)
                                            <option value="{{ $filter->value }}">{{ $filter->text}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="column">
                    <div class="dropdown is-right is-pulled-right">
                        <div class="dropdown-trigger">
                            <button class="button is-small" aria-haspopup="true" aria-controls="dropdown-menu">
                                <span class="icon is-small">
                                    <i class="fas fa-cog" aria-hidden="true"></i>
                                </span>
                                <span class="icon is-small">
                                    <i class="fas fa-angle-down" aria-hidden="true"></i>
                                </span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu" role="menu">
                            <div class="dropdown-content">
                                <a id="display-data" href="javascript:void(0);" class="dropdown-item">
                                    Display data
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
 
            </div>

            <div id="chart" style="width:100%; height:450px;"></div>
            <div id="detail-chart" class="is-hidden" style="height:450px; overflow-y: auto;"> 
                
                @yield('detail-chart')

                <div class="has-text-centered is-hidden">
                    <a href="javascript:void(0);">
                        <span class="icon"><i class="fas fa-angle-double-down"></i></span> 
                        <span>Show more</span>
                    </a>
                </div>
            </div>
        </div>
        
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/litepicker/dist/js/main.js"></script>
        <script src="/js/app.js"></script>
        
        @yield('custom-js')

    </body>
</html>