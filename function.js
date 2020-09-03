export const drawTableX=async (table)=>{

    //download configuration
    const confURL = table.getAttribute("conf");
    const conf = await getJson(confURL);
    
    // download data
    const data = await sync(conf);

    console.log(data)


}

const getJson = async (url)=> {
    const data = await fetch(url);
    const string = await data.text();
    if(data.status!=200) 
        return {
            error:true,
            message:string
        }

    let json = JSON.parse(string);
    return json;

}

const sync = async (conf)=>{
    const bridge = conf.bridge;
    const url = bridge+"?action=sync&tablex="+JSON.stringify(conf);
    const data = await getJson(url);

    return data;
}