<div class="container d-flex flex-column align-items-center m-2">
    <h2 class="m-2">Munkalataink településenként</h2>
    <select class="form-control w-50" name="citySelect" id="citySelect" onchange="onSelect()">
        <option value="0">Válasz várost!</option>
    </select>
    <table class="table table-striped m-2 w-50">
        <thead>
            <tr class="thead-dark text-center">
                <th>Munkás</th>
                <th>Alkalom</th>
                <th>Össz munkaóra</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
</div>

<script src="getData.js"></script>
<script src="munkalataink.js"></script>