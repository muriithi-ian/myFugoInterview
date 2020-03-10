$(document).ready(function () {
    //create an array of keys and values to render dynamically
    keyLabel = Object.keys(apiRawData);
    //console.log(keyLabel);
    keyValue = Object.values(apiRawData);
    //console.log(keyValue);

    //render keys and values dynamically
    for (let i = 0; i < 4; i++) {
        row = "<tr><td>" + keyLabel[i] + "</td><td>" + keyValue[i] + "</td></tr>";
        $("#apiData").append(row);
        //i++;
    }

    row = "<tr><td> country </td><td>" + apiRawData.farmId.country + "</td></tr>";
    $("#apiData").append(row);
    row = "<tr><td> emailAddress </td><td>" + apiRawData.farmId.emailAddress + "</td></tr>";
    $("#apiData").append(row);
    row = "<tr><td> phoneNumber </td><td>" + apiRawData.farmId.phoneNumber + "</td></tr>";
    $("#apiData").append(row);
   
    row = "<tr><td> identificationName </td><td>" + apiRawData.identificationTypeId.identificationName + "</td></tr>";
    $("#apiData").append(row);


    modifiedDate = apiRawData.originDate.slice(0,10);
    row = "<tr><td> originDate </td><td>" + modifiedDate + "</td></tr>";
    $("#apiData").append(row);




})