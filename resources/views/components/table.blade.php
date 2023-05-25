    <table class="table table-striped mt-5 table-report table-report--tabulator tabulator" style="width: 100%;">
        <div class="tabulator-header">

            <thead>
                <tr>
                    {{ $head }}
                </tr>
            </thead>
        </div>

        <div class="tabulator-tableHolder">

            <tbody class="bg-white divide-y divide-cool-gray-200">
                {{ $body }}
            </tbody>
        </div>


    </table>
    {{-- 
        <div class="tabulator-footer">
            <span class="tabulator-paginator">
                <label>Page Size</label>
                <select class="tabulator-page-size" aria-label="Page Size" title="Page Size">
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="30">30</option>
                    <option value="40">40</option>
                </select>
                <button class="tabulator-page" type="button" role="button" aria-label="First Page"
                    title="First Page" data-page="first" disabled="">First</button><button
                    class="tabulator-page" type="button" role="button" aria-label="Prev Page"
                    title="Prev Page" data-page="prev" disabled="">Prev</button><span
                    class="tabulator-pages"><button class="tabulator-page active" type="button"
                        role="button" aria-label="Show Page 1" title="Show Page 1"
                        data-page="1">1</button><button class="tabulator-page" type="button"
                        role="button" aria-label="Show Page 2" title="Show Page 2"
                        data-page="2">2</button></span><button class="tabulator-page" type="button"
                    role="button" aria-label="Next Page" title="Next Page"
                    data-page="next">Next</button><button class="tabulator-page" type="button"
                    role="button" aria-label="Last Page" title="Last Page" data-page="last">Last
                </button>
            </span>
        </div> 
    --}}
