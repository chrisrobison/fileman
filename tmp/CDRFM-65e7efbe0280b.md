```html
<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <style>
        * {
            box-sizing: border-box;
        }
        
        body {
            font-family: "Lexend", "Helvetica Neue", "Helvetica", sans-serif;
            margin: 0;
            padding: 0;
            font-size: 16px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: #ccc;
        }
        
        header {
            background-color: #999;
            color: #eee;
            height: 0vh;
        }
        
        main {
            background-color: #bbb;
            color: #222;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
        }
        
        footer {
            background-color: #666;
            color: #eee;
            height: 0vh;
        }
        
        ul {
            margin: 0;
            padding: 0;
        }
        
        li {
            display: flex;
            flex-direction: row;
            white-space: nowrap;
            padding: 0.25rem;
            background-clip: border-box;
            cursor: pointer;
            color: #444;
            transition: all 150ms linear;
            transform: scale(1);
        }
        
        li:hover {
            background-color: #ff06;
            color: #333;
        }
        
        #zones-wrap {
            display: inline-block;
            height: 100%;
            width: 25rem;
            background-color: #fff;
            color: #000;
            overflow-y: scroll;
        }
        #zones li {
            width: 100%;
            display: inline-block;
        }
        form {
            display: flex;
            flex-direction: row;
        }
        
        .zones {
            width: 33vw;
            height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        .current {
            background-color: #666;
            color: #fff;
        }
        
        .current.focus {
            background-color: #039;
            color: #fff;
        }
        
        table {
            border-collapse: collapse;
        }
        
        tr td {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            padding: 4px;
            border-right: 1px solid #0006;
            background: #fff;
            cursor: pointer;
        }
        
        tr:nth-child(2n) td {
            background-color: #eee;
        }
        
        th {
            background: #222;
            color: #eee;
            padding: 4px;
            height: 2rem;
            vertical-align: top;
            text-align: center;
        }
        
        #id {
            width: 3rem;
        }
        
        .id {
            width: 2rem;
        }
        
        .zone {
            width: 23rem;
            vertical-align: top;
            text-align: center;
        }
        
        .ttl {
            width: 2rem;
        }
        
        .type {
            width: 4rem;
        }
        
        .host {
            width: 6rem;
        }
        
        .mx_pri {
            width: 2rem;
        }
        
        .data {
            width: 30rem;
            overflow: hidden;
        }
        .delete {
            float:right;
            transition: all 500ms linear;
            transition-delay: 1s;
            opacity: 0;
            color: #0005;
        }
        li:hover .delete {
            opacity: 1;
        }
        fieldset {
            line-height: 150%;
        }
        
        .focus {
            border: 1px dashed #ff0;
        }
        
        #editor {
            position: fixed;
            bottom: 0px;
            right: 0px;
            width: 60vw;
            height: 50vh;
        }
        
        #details {
            position: fixed;
            top: 0px;
            right: 0px;
            width: 70vw;
            height: 50vh;
            overflow-y: scroll;
        }
        
        .zones {
            width: 45vw;
            margin: 0px;
            padding: 0px;
            line-height: 150%;
            position: fixed;
            left: 0px;
            top: 0px;
            height: 100vh;
        }
        
        #zones li {
            padding-left: 1rem;
        }
        
        #zones {
            height: 100%;
        }
        
        .zones div {
            padding: 4px;
            background: #222;
            color: #eee;
            height: 2rem;
        }
        
        th {
            height: 2rem;
            padding: 4px;
            line-height: 150%;
            position: sticky;
            top: 0;
        }
        
        #editor {
            line-height: 175%;
            width: 70vw;
            background-color: #ddd;
            border-top: 1px solid #0006;
            padding-left: 1rem;
            padding-top: 0.5rem;
            font-size: 1.1rem;
        }
        
        .empty {
            border:0;
        }
        
        input,
        select {
            font-size: 18px;
        }
        
        #editor label {
            width: 8rem;
            display: inline-block;
            text-align: right;
            padding: 0.25rem;
        }
        
        tr.current td {
            background: #666;
        }
        
        tr.current.focus td {
            background: #039c;
        }
        
        #searchBtn {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' height='1em' viewBox='0 0 512 512'%3E%3Cpath fill='%23eee' d='M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z'/%3E%3C/svg%3E");
            background-repeat: no-repeat no-repeat;
            background-position: center center;
            background-size: contain;
            height: 1.5rem;
            width: 1.5rem;
            margin-top: 1px;
            background-color: #222;
            border: 2px solid #222;
            border-top-right-radius: 6px;
            border-bottom-right-radius: 6px;
            filter: invert(1);
            padding: 0px;
        }
        
        #search {
            width: 18rem;
            margin-left: 0.25rem;
            padding: 0px;
            margin-right: 0px;
            height: 1.55rem;
        }
        
        #zones .hidden {
            display: none !important;
        }
        legend#zone {
            font-size: 2rem;
        }
        .current.focus td[contenteditable="true"] {
            color: #eee;
            background: #039c;
        }
        
        .current td[contenteditable="true"]:focus {
            background-color: #eee;
            color: #222;
        }
        
        .soa {
            width: 20rem;
        }
        .recordWrap {
            display; none;
        }
        #editor {
            display: none;
        }
        #newzone-dialog {
           padding:0;
           top: 20%;
           width: 34rem;
        }
        #newzone-wrap {
            padding: 1rem;
        }
        #newzone-form {
            display: flex;
            padding: 1rem;
            flex-direction: column;
        }
        #newzone-form label {
            width:8rem;
        }
        #newzone-dialog h1 {
            padding: 0.2rem 1rem;
            font-size: 24px;
            margin: 0;
            font-weight: 600;
            color: #fff;
            background: #06c;
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <main>
        <form onsubmit="return false;">
            <div class="zones">
                <div style="padding-left: 1rem; display: flex;"> Domain <input type="text" id="search" name="search"><button onclick="event.preventDefault();return false;" id="searchBtn"></button></div>
                <div id='zones-wrap'>
                    <ul tabindex="0" id="zones"> </ul>
                </div>
            </div>
            <div class="records" tabindex="0">
                <div id="details">
                    <table>
                        <tr>
                            <th class='zone'>Zone</th>
                            <th class='ttl'>TTL</th>
                            <th class='type'>Type</th>
                            <th class='host'>Host</th>
                            <th class='mx_pri'>MX</th>
                            <th class='data'>Data</th>
                        </tr>
                        <tbody id="zone-details">
                        </tbody>
                    </table>
                </div>
                <div id="editor" class="empty">
                    <div class="toolbar">
                        <button onclick="return app.newZone(event)">New Zone</button>
                        <button onclick="return app.deleteZone(event)">Del Zone</button>
                        <button onclick="return app.newRecord(event)">New Record</button>
                        <button onclick="return app.deleteRecord(event)">Del Record</button>
                    </div>
                    <fieldset>
                        <legend id="zone"></legend>
                        <!--
                    primary_ns, resp_contact, serial, refresh, retry, expire, minimum
                -->
                        <div class="form-group" style="display:flex;flex-direction:row;">
                            <div style="white-space:nowrap;">
                                <label for="primary_ns">Primary NS</label> <input class='soa' type="text" id="primary_ns" style="width:15rem;"><br>
                                <label for="resp_contact">Contact</label> <input class='soa' type="email" id="resp_contact" style="width:15rem;" placeholder="user@example.com">
                            </div>
                            <div style="white-space:nowrap;">
                                <label for="serial">Serial</label> <input class='soa' type="number" id="serial" name="serial" style="width:8rem;"><br>
                                <label for="serial">Refresh</label> <input class='soa' type="number" id="refresh" name="refresh" style="width:4rem;">
                                <span><label for="serial">Retry</label> <input class='soa' type="number" id="retry" name="retry" style="width:4rem;"></span>
                                <span style="display:none;"><label for="serial">Expire</label> <input class='soa' type="number" id="expire" name="expire" style="width:6rem;"></span>
                                <span style="display:none;"><label for="serial">Min</label> <input class='soa' type="number" id="minimum" name="minimum" style="width:4rem;"></span>
                            </div>
                        </div>
                    </fieldset>
                    <div class="recordWrap">
                        <div class="form-group">
                            <label for="zone">Zone</label> <input type="text" id="domain" name="domain" value="">
                            <label for="id">ID</label> <input type="text" id="id" name="id" value="">
                        </div>
                        <div class="form-group">
                            <label for="type">Type</label> <select id="type" name="type"><option value="NS">NS</option><option value="A">A</option><option value="AAAA">AAAA</option><option value="CNAME">CNAME</option><option value="MX">MX</option><option value="TXT">TXT</option></select>
                            <label for="data">Data</label>
                            <input type="text" id="data" style="width: 30rem;">
                       </div>
                        <div class="form-group">
                            <label for="ttl">TTL</label> <input type="number" id="ttl" value="3600" size="5" style="width: 5rem;">
                            <label for="mx_priority">MX Pri</label> <input type="number" id="mx_priority" name="mx_priority" style="width:5rem;">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </main>
    <dialog id="newzone-dialog">
        <h1>New DNS Zone (Domain)</h1>
        <form id="newzone-form">
            <label for="newzone-name">Zone Name: <input type="text" id="newzonename" name="newzonename" placeholder="example.com"></label>
            <label for="newzone-ip">IP Address: <input type="text" id="newzone-ip" name="newzone-ip" placeholder="127.0.0.1"></label>
            <fieldset>
                <legend>Options</legend>
                <label for="newzone-mx">Include MX Record <input type="checkbox" id="newzone-mx" name="newzone-mx" checked></label>
            </fieldset>
            <div style="text-align:right;">
                <button onclick="$('#newzone-dialog').close()">Cancel</button><button onclick="return app.newZone(event)">Create Zone</button>
            </div>
        </form>
    </dialog>
    </dialog>
    <script>
        (function() {
            const $ = str => document.querySelector(str);
            const $$ = str => document.querySelectorAll(str);

            const app = {
                data: {},
                state: {
                    loaded: false
                },
                init: function() {
                    app.fetch("api.php?x=get_zones", app.loadZones);
                    app.state.loaded = true;
                    $("#zones").addEventListener("click", app.changeZone);
                    $("#zone-details").addEventListener("click", app.editField);
                    $("#search").addEventListener("input", app.search);
                    document.addEventListener("keydown", app.doKey);
                },
                fetch: function(url, callback) {
                    fetch(url).then(response => response.json()).then(data => {
                        app.data = data;
                        app.state.loaded = true;
                        if (callback && typeof(callback) === "function") {
                            callback(data);
                        }
                    });
                },
                search(e) {
                    let str = e.target.value;
                    $$(".hidden").forEach(el => el.classList.remove('hidden'));
                    $$("ul#zones li").forEach(el => {
                        if (!el.innerText.match(str)) {
                            el.classList.add('hidden');
                        }
                    });
                },
                newZone(evt) {
                    if (evt) {
                        evt.preventDefault();
                        evt.stopPropagation();
                    }
                    $("#newzone-dialog").show();
                    return false;
                },
                doKey(evt) {
                    let key = evt.keyCode;
                    if (evt.target.tagName === "INPUT") {
                        app.search(evt);
                    }
                    console.log(`Keypress ${key}`);

                    let f = $(".focus");

                    if (!f) {
                        f = $(":focus");
                        if (!$(".current") && f && f.tagName === "UL") {
                            f = f.querySelector("li");
                            f.classList.add("focus","current");
                            app.state.currentZone =  f.innerText;
                            evt.preventDefault();
                            return false;
                        }
                    }
                    switch (key) {
                        case 37:
                        case 38: // up 
                            if (f && f.tagName === "TR") {
                                let prevRow = f.previousSibling || '';
                                if (!prevRow) prevRow = f.parentElement.lastChild;

                                f.classList.remove("focus", "current");
                                prevRow.classList.add("current", "focus");
                                app.loadRecord(prevRow.dataset.id);
                                f.scrollIntoView({block: "center", inline: "nearest", behavior: "smooth" });
                            } else if (f && f.tagName === "LI") {
                                let prevRow = f.previousSibling;
                                if (prevRow===null) prevRow = f.parentElement.lastChild;

                                f.classList.remove("focus", "current");
                                prevRow.classList.add("current", "focus");
                                app.selectZone(prevRow.innerText);
                                f.scrollIntoView({block: "center", inline: "nearest", behavior: "smooth" });
                            }
                            evt.preventDefault();
                            break;
                        case 39: // right
                        case 40: // down
                            if (f && f.tagName === "TR") {
                                let nextRow = $(".current.focus+tr");
                                if (!nextRow) nextRow = f.parentElement.firstChild;

                                f.classList.remove("focus", "current");
                                nextRow.classList.add("current", "focus");
                                app.loadRecord(nextRow.dataset.id);
                                f.scrollIntoView({block: "center", inline: "nearest", behavior: "smooth" });
                            } else if (f && f.tagName === "LI") {
                                let nextRow = $(".focus+li");
                                if (!nextRow) nextRow = f.parentElement.firstChild;

                                f.classList.remove("focus", "current");
                                nextRow.classList.add("current", "focus");
                                app.selectZone(nextRow.innerText);
                                f.scrollIntoView({block: "center", inline: "nearest", behavior: "smooth" });
                            }
                            evt.preventDefault();
                            break;
                        case 37: // left
                            break;
                        case 39: // right 
                            break;
                        case 27: // esc

                            break;
                        case 9: // tab
                            if ($(".focus") && $(".focus").tagName === "TR") {
                                $(".focus")?.classList.remove("focus");
                                $("li.current")?.classList.add("focus");
                            } else {
                                $(".focus")?.classList.remove("focus");
                                $("tr.current")?.classList.add("focus");
                            }
                            break;
                        default:

                    }
                },
                editField(evt) {
                    $(".focus")?.classList.remove("focus");
                    evt.target.setAttribute("contenteditable", true);
                    evt.target.onblur = function(e) {
                        this.removeAttribute("contenteditable");
                    };

                    let row = evt.target.closest("tr");
                    row.classList.add("focus");
                    app.loadRecord(row.dataset.id);
                },
                selectZone(zone) {
                    console.log("Selected zone " + zone);
                    app.fetch("api.php?x=get_zone&zone=" + zone, app.loadZone);
                },
                changeZone(evt) {
                    if (evt.target.tagName === "LI") {
                        $(".current")?.classList.remove("focus", "current");
                        $(".focus")?.classList.remove("focus");
                        evt.target.classList.add('current',"focus");
                        $(".recordWrap").style.display = "none";
                        $("#editor").style.display = "block";
                        app.state.currentZone = evt.target.innerText;
                        console.log("Selected zone " + app.state.currentZone);
                        app.fetch("api.php?x=get_zone&zone=" + evt.target.innerText, app.loadZone);
                    }
                },
                loadRecord(id) {
                    let rec = app.data.find((el) => el.id == id);
                    $(".recordWrap").style.display = "block";

                    $("tr.current")?.classList.remove('current');
                    $(`tr[data-id='${rec.id}']`).classList.add("current");

                    $("#id").value = rec.id;
                    $("#domain").value = app.state.currentZone;
                    $("#ttl").value = rec.ttl;
                    $("#type").value = rec.type;
                    $("#mx_priority").value = rec.mx_priority;
                    $("#data").value = rec.data;

                },
                loadZone(data) {
                    let out = "";
                    let first = 0;
                    let rows = data.length;
                    for (const row of data) {
                        row.mx_priority = (row.mx_priority != null) ? row.mx_priority : '';
                        out += `<tr data-id="${row.id}">`;
                        if (first == 0) {
                            out += `<td class="zone">${row.zone}</td>`;
                        } else {
                            out += `<td class="zone" style="color:#aaa;">${row.zone}</td>`;
                        }
                        out += `
                    <td class="ttl">${row.ttl}</td>
                    <td class="type">${row.type}</td>
                    <td class="host">${row.host}</td>
                    <td class="mx_pri">${row.mx_priority}</td>`;

                        if (row.type === "SOA") {
                            /*primary_ns refresh resp_contact retry serial ttl*/
                            $("#primary_ns").value = row.primary_ns;
                            $("#resp_contact").value = row.resp_contact;
                            $("#serial").value = row.serial;
                            $("#refresh").value = row.refresh;
                            $("#retry").value = row.retry;
                            $("#expire").value = row.expire;
                            $("#minimum").value = row.minimum;
                            $("#zone").innerHTML = row.zone;

                            row.data = `${row.primary_ns} ${row.resp_contact} ${row.serial}`;
                        }
                        out += `<td class="data"><div class="data">${row.data}</div></td></tr>`;
                        first = 1;
                    }
                    $("#zone-details").innerHTML = out;

                },
                loadZones(data) {
                    let out = "";

                    for (const item of data) {
                        out += `<li>${item} <a title="Delete entire zone" onclick="app.confirmFullDelete()" class="delete"><i class="fas fa-trash-can"></i></a></li>`;
                    }
                    $("#zones").innerHTML = out;
                },
                display: function(data, tgt) {
                    let out = "<table><thead><tr>";
                    const keys = Object.keys(data[0]);
                    if (keys) {
                        keys.forEach(key => {
                            out += `<th>${key}</th>`;
                        });
                    }
                    out += "</tr></thead><tbody>";
                    data.forEach(item => {
                        out += `<tr>`;
                        keys.forEach(key => {
                            out += `<td>${item[i]}</td>`;
                        });
                        out += `</tr>`;
                    });
                    out += "</tbody></table>";

                    if (tgt) {
                        tgt.innerHTML = out;
                    }
                    return out;
                }
            }
            window.app = app;
            app.init();
        })();
    </script>
</body>

</html>

```
