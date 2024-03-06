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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        * { box-sizing: border-box; }
        body {
            font-family: "Lexend", "Helvetica Neue", "Helvetica", sans-serif;
            margin: 0;
            padding: 0;
            font-size: 16px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            background-color:#000;
            height: 100vh;
        }
        legend { text-transform: uppercase; font-size:1.2rem; }
        header {
            background-color: #999;
            color: #eee;
            height: 0vh;
        }

        main {
            background-color: #000;
            color: #ddd;
            display: flex;
            flex-direction: column;
            align-items: stretch;
            justify-content: center;
        }

        footer {
            background-color: #666;
            color: #eee;
            height: 0vh;
        }

        li {
            display: flex;
            flex-direction: row;
            white-space: nowrap;
        }
        input,textarea,select {
            background-color: #222;
            color: #eee;
        }
        input {
            border: 1px inset #000;
            font-size: 18px;
            font-weight: 300;
            padding: 4px;
        }
        label {
            display: flex;
            justify-content: flex-start;
            align-items: center;
        }
        #imgsrc {
            width: 25rem;
        }
        button {
            background-color:#6664;
            border: 1px solid #ccc;
            color:#fff;
            border-radius: 1rem;
            height: 2rem;
            margin-left: 1rem;
        }
        button:hover {
            background-color: #666a;
        }
        .results, .preview {
            align-items: flex-start;
        }
        fieldset {
            background-color: #333;
        }
        @media screen and (maxwidth:640px) {
            
        }
        .preview {
            min-height:7rem;
        }
        .preview-wrap {
            width:90%;
            border: 1px solid #eee6;
            min-height: 7rem;
        }
        label > span {
            display: inline-block;
            width: 6rem;
            text-align: right;
            padding-right: 1rem;
        }
        .copylink {
            margin-left: 1rem;
            padding: 0.25rem 0.5rem;
            border-radius: 6px;
            border: 1px solid #eee0;
            transition: all 200ms linear;
            position: relative;
            top: 0px;
        }
        .copylink:hover {
            border: 1px solid #eee;
        }
        .copyLink:active {
            position: relative;
            top: 4px;
            border: 1px solid #f00;
        }
        main {
            max-width: 600px;
        }
        h1 {
            margin-bottom: 0rem;
            height: 5rem;
            width: 600px;
            overflow: hidden;
            border-bottom: 2px solid #fff;
            display: flex;
            align-items: center;
            justify-content: center; 
        }
        details {
            font-family: "Lexend", "Helvetica Neue", sans-serif;
            font-weight: 300;
            letter-spacing: 0.5px;
            line-height: 1.5;
            border-bottom: 2px solid #fff;
            padding-bottom: 1rem;
            padding-left: 0px;
            padding-top: 1rem;
            user-select: none;
        }
        details p { 
            padding-left: 2rem;
        }
        .detailWrap {
            display: inline-block;
            transition: all 200ms linear;
            overflow: hidden;
            width: 100%;
            height: 3.7rem;
        }
        .detailWrap:has(details[open]) {
            height: 12rem;
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
<main>
    
    <h1><img style="filter:invert(1);float:left;height:120px;top:20px;left:20px;position:relative;" width="200" src="https://cdr2.com/crblog/assets/img/img.svg">Image to DataURL Encoder</h1>
    <div class="detailWrap"><details><summary>INSTRUCTIONS</summary> 
        <p>Upload or enter URL of image you want to encode and click the 'Encode Image' button. The dataUrl is in the 'Encoded' box and you can see the dataUrl as a rendered image in 'Preview'. Images loaded via URL must be accessible publically accessible and CORS friendly. Images loaded from local files are never transmitted over the network.</p></details>
    </div>
    <br><fieldset>
        <legend>Base64 Encode URL</legend>
        <label for="imgsrc"><div style="display:inline-block;"><span>URL</span>
                <input type="text" id="imgsrc" name="imgsrc" placeholder="https://example.com/myimg.jpg"> or <br>
                <span>Upload File</span> <input id="inputFileToLoad" type="file" onchange="app.encodeImageFileAsURL();" />
            </div>
            <button onclick="app.encode();return false;">Encode Image</button>
        </label><br>
        <label class="results" for="results">
            <span>Encoded</span>
            <textarea id="results" name="results" rows="5" cols="50"></textarea>
            <span><a class="copylink" href="#" onclick="app.copyLink(); return false;"><svg xmlns="http://www.w3.org/2000/svg" height="1.5rem" fill="#eee" viewBox="0 0 448 512"><path d="M384 336H192c-8.8 0-16-7.2-16-16V64c0-8.8 7.2-16 16-16l140.1 0L400 115.9V320c0 8.8-7.2 16-16 16zM192 384H384c35.3 0 64-28.7 64-64V115.9c0-12.7-5.1-24.9-14.1-33.9L366.1 14.1c-9-9-21.2-14.1-33.9-14.1H192c-35.3 0-64 28.7-64 64V320c0 35.3 28.7 64 64 64zM64 128c-35.3 0-64 28.7-64 64V448c0 35.3 28.7 64 64 64H256c35.3 0 64-28.7 64-64V416H272v32c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V192c0-8.8 7.2-16 16-16H96V128H64z"/></svg></a>
            <br><span id="size"></span>
        </label><br>
        <label class="preview">
            <span>Preview</span>
            <div class="preview-wrap">
                <img id="preview" src="">
            </div>
        </label>

    </fieldset>
</main>
<script>
const $ = str => document.querySelector(str);
const $$ = str => document.querySelectorAll(str);

(function() {
    const app = {
        data: {},
        state: {
            loaded: false
        },
        init: function() {
            $("#imgsrc").addEventListener("keydown", function(e) {
                if (e.keyCode === 13) {
                    app.encode();
                }
            });
            app.state.loaded = true;
        },
        copyLink() {
            let txt = $("#results").value;
            $("#results").select();
            $("#results").setSelectionRange(0, 99999); // For mobile devices
   
            navigator.clipboard.writeText(txt);

        },
        toDataURL: url => fetch(url)
          .then(response => response.blob())
          .then(blob => new Promise((resolve, reject) => {
            const reader = new FileReader()
            reader.onloadend = () => resolve(reader.result)
            reader.onerror = reject
            reader.readAsDataURL(blob)
          })
        ),
        encode() {
            app.toDataURL($("#imgsrc").value).then(dataUrl => {
                $("#preview").src = dataUrl;
                $("#results").value = dataUrl;
            });

        },
        encodeImageFileAsURL() {
            var filesSelected = document.getElementById("inputFileToLoad").files;
            if (filesSelected.length > 0) {
              var fileToLoad = filesSelected[0];

              var fileReader = new FileReader();

              fileReader.onload = function(fileLoadedEvent) {
                var srcData = fileLoadedEvent.target.result; // <--- data: base64

                var newImage = document.createElement('img');
                newImage.src = srcData;

                document.getElementById("results").value = newImage.src;
                $("#preview").src = newImage.src;
                let r = 'KB';
                let v = (Math.floor((newImage.src.length / 1024) * 10) / 10);
                if (v > 1000) {
                    r = 'MB';
                    v = (Math.floor((v / 1024) * 10) / 10);
                }
                $("#size").innerHTML = v + r 
                console.log("Converted Base64 version is " + document.getElementById("results").value);
              }
              fileReader.readAsDataURL(fileToLoad);
            }
          },
        fetch: function(url, callback) {
            fetch(url).then(response=>response.json()).then(data=>{
                app.data = data;
                app.state.loaded = true;
                if (callback && typeof(callback) === "function") {
                    callback(data);
                }
            });
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
            data.forEach(item=>{
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
