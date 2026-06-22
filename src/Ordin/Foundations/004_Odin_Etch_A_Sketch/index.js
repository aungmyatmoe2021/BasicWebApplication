document.onreadystatechange = function() {
    if(document.readyState === "complete"){
        document.body.style.backgroundColor = "lightgray";
        let eleDiv = document.createElement("div");
        eleDiv.style.cssText = "display: flex;justify-content: center;align-items: center;flex-direction: column;margin: 200px auto;";
        for(let i=0; i<16; i++){
            let elefirstchildDiv = document.createElement("div");
            elefirstchildDiv.style.cssText = "padding: 0;margin: 0;min-width: 330px;min-height: 10px;display: flex;justify-content: start;align-items: center;flex-direction: row;";
            eleDiv.appendChild(elefirstchildDiv);
            for(let j=0; j<16; j++){
                let elesecondchildDiv = document.createElement("div");
                elesecondchildDiv.setAttribute("id",`div${i}${j}${i}${j}`);
                elesecondchildDiv.style.cssText = "padding: 0;margin: 0;min-width: 20px;min-height: 20px;border: 1px solid lightgray;background-color: white;";
                elefirstchildDiv.appendChild(elesecondchildDiv);
                elesecondchildDiv.onmouseover = function() {
                    elesecondchildDiv.style.cssText = "padding: 0;margin: 0;min-width: 20px;min-height: 20px;border: 1px solid lightgray;background-color: green";
                }

                elesecondchildDiv.onclick = function() {
                    if(elesecondchildDiv.style.backgroundColor === "green"){
                        elesecondchildDiv.style.cssText = "padding: 0;margin: 0;min-width: 20px;min-height: 20px;border: 1px solid lightgray;background-color: white";
                    }else{
                        elesecondchildDiv.style.cssText = "padding: 0;margin: 0;min-width: 20px;min-height: 20px;border: 1px solid lightgray;background-color: green";
                    }
                }
            }
        }
        document.body.appendChild(eleDiv);
    }
}