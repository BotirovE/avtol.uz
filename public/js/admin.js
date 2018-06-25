function switchSection(id) {
    document.cookie = "adminNav=" + id + ";";
    let section = document.getElementsByClassName('section');
    for (let i = 0; i < section.length; i++)
        section[i].style.display = "none";
    document.getElementById(id).style.display = "block";
}

function setCookie1(id){
    document.cookie = "allProducts=" + id + ";";
}

function setCookie2(id){
    document.cookie = "Products=" + id + ";";
}

function getCookie(cname) {
    let name = cname + "=";
    let ca = document.cookie.split(';');
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) === ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) === 0) {
            return c.substring(name.length, c.length);
        }
    }
    if(cname=="allProducts")
        return "allTyres";
    if(cname=="Products")
        return "tyres"
    return "all";
}
window.onload = function () {
    switchSection(getCookie("adminNav"));
    let navs = document.getElementsByClassName("navs");
    switch(getCookie("adminNav")) {
        case "all":
            navs[0].className = "navs active";
            break;
        case "products":
            navs[1].className = "navs active";
            break;
        default:
            navs[2].className = "navs active";
    }
    let navs2 = document.getElementsByClassName("navs2");
    switch(getCookie("allProducts")) {
        case "allTyres":
            navs2[0].className = "active";
            break;
        case "allAccum":
            navs2[1].className = "active";
            break;
        case "allRims":
            navs2[2].className = "active";
            break;
        default:
            navs2[3].className = "active";
    }
    let navs3 = document.getElementsByClassName("navs3");
    switch(getCookie("Products")) {
        case "accum":
            navs3[1].className = "active";
            break;
        case "rims":
            navs3[2].className = "active";
            break;
        case "carpet":
            navs3[3].className = "active";
            break;
        default:
            navs3[0].className = "active";
    }
    let nav = document.getElementById(getCookie("allProducts"));
    nav.className = "tab-pane fade in active";
    let nav1 = document.getElementById(getCookie("Products"));
    nav1.className = "tab-pane fade in active";
};

function editBrand(id, name) {
    var action = '/admin/brands/:id';
    action = action.replace(':id', id);
    document.getElementById('updated_form').action = action;
    document.getElementById('updated_name').value = name;
}

function editTyre(tyre) {
    var action = '/admin/tyres/:id';
    action = action.replace(':id', tyre.id);
    document.getElementById('tyre_form').action = action;
    document.getElementById('tyre_category').value = tyre.category;
    document.getElementById('tyre_price').value = tyre.price;
    document.getElementById('tyre_season').value = tyre.season;
    document.getElementById('tyre_comment').value = tyre.comment;
    document.getElementById('tyre_size').value = tyre.size;
    document.getElementById('tyre_diameter').value = tyre.diameter;
    var selectObj = document.getElementById('tyre_brands');
    for(var i = 0; i < selectObj.length; i++) {
        for(var j = 0; j < tyre.brands.length; j++) {
            if(selectObj.options[i].value == tyre.brands[j].id) {
                selectObj.options[i].selected = true;
            }
        }    
    }
}

function editMat(mat) {
    var action = '/admin/mats/:id';
    action = action.replace(':id', mat.id);
    document.getElementById('mat_form').action = action;
    document.getElementById('mat_price').value = mat.price;
    document.getElementById('mat_color').value = mat.color;
    var selectObj = document.getElementById('mat_brands');
    for(var i = 0; i < selectObj.length; i++) {
        for(var j = 0; j < mat.brands.length; j++) {
            if(selectObj.options[i].value == mat.brands[j].id) {
                selectObj.options[i].selected = true;
            }
        }    
    }
}

function editWheel(wheel) {
    var action = '/admin/wheels/:id';
    action = action.replace(':id', wheel.id);
    document.getElementById('wheel_form').action = action;
    document.getElementById('wheel_gap').value = wheel.gap;
    document.getElementById('wheel_price').value = wheel.price;
    document.getElementById('wheel_color').value = wheel.color;
    document.getElementById('wheel_size').value = wheel.size;
    document.getElementById('wheel_diameter').value = wheel.diameter;
    var selectObj = document.getElementById('wheel_brands');
    for(var i = 0; i < selectObj.length; i++) {
        for(var j = 0; j < wheel.brands.length; j++) {
            if(selectObj.options[i].value == wheel.brands[j].id) {
                selectObj.options[i].selected = true;
            }
        }    
    }
}

function editAccum(accum) {
    var action = '/admin/accums/:id';
    action = action.replace(':id', accum.id);
    document.getElementById('accum_form').action = action;
    document.getElementById('accum_name').value = accum.name;
    document.getElementById('accum_price').value = accum.price;
    document.getElementById('accum_capacity').value = accum.capacity;
    document.getElementById('accum_comment').value = accum.comment;
    document.getElementById('accum_length').value = accum.length;
    document.getElementById('accum_width').value = accum.width;
    document.getElementById('accum_height').value = accum.height;
    var selectObj = document.getElementById('accum_brands');
    for(var i = 0; i < selectObj.length; i++) {
        for(var j = 0; j < accum.brands.length; j++) {
            if(selectObj.options[i].value == accum.brands[j].id) {
                selectObj.options[i].selected = true;
            }
        }    
    }
}