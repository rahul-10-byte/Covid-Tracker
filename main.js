var sdata, ddata, ddo, sd;
var c = [];
async function demo() {
  const data = await fetch(
    "https://api.rootnet.in/covid19-in/unofficial/covid19india.org/statewise"
  );
  const dd = await data.json();
  const sdwd = await fetch(
    "https://api.covid19india.org/state_district_wise.json"
  );
  ddata = await sdwd.json();
  var a = [];
  Object.keys(dd).forEach((i) => {
    a.push(i);
  });
  var adata = Object.values(dd[a[1]]);
  sdata = Object.values(adata[3]);
  var aldata = Object.values(adata[2]);
  for (i = 0; i < sdata.length; i++) {
    if (sdata[i].state === "State Unassigned") {
      continue;
    }
    const op = document.createElement("option");
    op.innerText = sdata[i].state;
    const sop = document.createElement("option");
    sop.innerText = sdata[i].state;
    var x = document.querySelector("#t1");
    var y = document.querySelector("#t2");
    x.appendChild(op);
    y.appendChild(sop);
  }
  document.querySelector(".confirm").textContent = aldata[0];
  document.querySelector(".recover").textContent = aldata[1];
  document.querySelector(".active").textContent = aldata[3];
  document.querySelector(".death").textContent = aldata[2];

  document.querySelector(".sconfirm").textContent = sdata[0].confirmed;
  document.querySelector(".srecover").textContent = sdata[0].recovered;
  document.querySelector(".sactive").textContent = sdata[0].active;
  document.querySelector(".sdeath").textContent = sdata[0].deaths;
  var dl = document.querySelector("#t2").value;
  if (dl === "Maharashtra") {
    ddo = Object.values(ddata[dl]);
    while (c.length > 0) {
      c.pop();
    }
    Object.keys(ddo[0]).forEach((i) => {
      c.push(i);
    });

    function removeItemOnce(arr, value) {
      var index = arr.indexOf(value);
      if (index > -1) {
        arr.splice(index, 1);
      }
      return arr;
    }
    var nnd = [
      "Unknown",
      "Railway Quarantine",
      "Airport Quarantine",
      "Other State",
      "Foreign Evacuees",
      "Bengaluru Rural",
      "Bengaluru Urban",
    ];
    nnd.forEach((i) => {
      if (c.includes(i)) {
        removeItemOnce(c, i);
      }
    });
    c.forEach((i) => {
      const dc = document.createElement("option");
      var z = document.querySelector("#t3");
      dc.textContent = i;
      z.appendChild(dc);
    });
    sd = document.querySelector("#t2").value;
    var dn = document.querySelector("#t3").value;
    document.querySelector(".dconfirm").textContent =
      ddata[dl].districtData[dn].confirmed;
    document.querySelector(".dactive").textContent =
      ddata[dl].districtData[dn].active;
    document.querySelector(".drecover").textContent =
      ddata[dl].districtData[dn].recovered;
    document.querySelector(".ddeath").textContent =
      ddata[dl].districtData[dn].deceased;
  }

  return sdata;
}
$("#t1").change((demo) => {
  for (i = 0; i < sdata.length; i++) {
    if (sdata[i].state === document.querySelector("#t1").value) {
      document.querySelector(".sconfirm").textContent = sdata[i].confirmed;
      document.querySelector(".srecover").textContent = sdata[i].recovered;
      document.querySelector(".sactive").textContent = sdata[i].active;
      document.querySelector(".sdeath").textContent = sdata[i].deaths;
      break;
    }
  }
});
async function dwd() {
  $("#t3").find("option").remove().end();
  sd = document.querySelector("#t2").value;
  ddo = Object.values(ddata[sd]);
  while (c.length > 0) {
    c.pop();
  }
  Object.keys(ddo[0]).forEach((i) => {
    c.push(i);
  });

  function removeItemOnce(arr, value) {
    var index = arr.indexOf(value);
    if (index > -1) {
      arr.splice(index, 1);
    }
    return arr;
  }
  var nnd = [
    "Unknown",
    "Railway Quarantine",
    "Airport Quarantine",
    "Other State",
    "Foreign Evacuees",
    "Bengaluru Rural",
    "Bengaluru Urban",
  ];
  nnd.forEach((i) => {
    if (c.includes(i)) {
      removeItemOnce(c, i);
    }
  });

  c.forEach((i) => {
    const dc = document.createElement("option");
    var z = document.querySelector("#t3");
    dc.textContent = i;
    z.appendChild(dc);
  });
  var zz = document.querySelector("#t3").value;
  if (c[0] === zz) {
    document.querySelector(".dconfirm").textContent =
      ddata[sd].districtData[zz].confirmed;
    document.querySelector(".dactive").textContent =
      ddata[sd].districtData[zz].active;
    document.querySelector(".drecover").textContent =
      ddata[sd].districtData[zz].recovered;
    document.querySelector(".ddeath").textContent =
      ddata[sd].districtData[zz].deceased;
  }

  return sd, ddata;
}

function dda(dwd) {
  var zz = document.querySelector("#t3").value;
  document.querySelector(".dconfirm").textContent =
    ddata[sd].districtData[zz].confirmed;
  document.querySelector(".dactive").textContent =
    ddata[sd].districtData[zz].active;
  document.querySelector(".drecover").textContent =
    ddata[sd].districtData[zz].recovered;
  document.querySelector(".ddeath").textContent =
    ddata[sd].districtData[zz].deceased;
}
$("#t2").change(() => {
  dwd();
});

$("#t3").change(() => {
  dda();
  console.log("hello");
});
$(document).ready(() => {
  demo();
});
