import {drawTableX} from './function.js';

(async ()=>{
    //scanning fot tablex
    let tables = document.getElementsByTagName('tablex');
    
    for(let table of tables)
        drawTableX(table);

})()