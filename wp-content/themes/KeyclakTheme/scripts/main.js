jQuery(document).ready( function() {
    window.$ = window.jQuery;

    $("#ubload-btn-left").change(function(){
        var filename = $(this).val().replace(/.*\\/, "");
        $(".upload-text-btn").html(filename);
    });

    $("#ubload-btn-right").change(function(){
        var filename = $(this).val().replace(/.*\\/, "");
        $(".upload-text-btn-right").html(filename);
    });

});

window.onload = function() {

    // Dropdown Menu
    const dropdown = document.querySelector('#dropdown-button');
    const dropdownList = document.querySelector('#dropdown-list');

    if (dropdown){
        dropdown.addEventListener("click", () => {
            if (dropdownList.classList.contains('open') == false) {
                dropdownList.classList.add('open');
            } else {
                dropdownList.classList.remove('open');
            }
        })
    }
}

/************************************* CUSTOM SELECT ********************************************/

function ascenseur(){
    var asceneur = '';
    asceneur += '<div class="add-advert_mebl flex-type">';
    asceneur +='<div class="flex-type_top">';
    asceneur += '<h3 class="checkbox-list_title">Ascenseur:</h3>';
    asceneur += '<div class="add-advert_icon">';
    asceneur += '<img src="/wp-content/uploads/2019/04/prof_elevator.png" alt="kitchen">';
    asceneur += '</div>';
    asceneur += '</div>';
    asceneur += '<div class="checkbox-list">';
    asceneur += '<div class="yep-nop">';
    asceneur += '<label class="container-radio oui">oui';
    asceneur += '<input type="radio" checked="checked" name="Meublée">';
    asceneur += '<span class="radiobtn"></span>';
    asceneur += '</label>';
    asceneur += '<label class="container-radio non">non';
    asceneur += '<input type="radio"  name="Meublée">';
    asceneur += '<span class="radiobtn"></span>';
    asceneur += '</label>';
    asceneur += '</div>';
    return  asceneur;
}

function surface(){
    var surface = '';
    surface +='<div class="add-advert_surface-terrain flex-type">';
    surface +='<div class="add-advert_icon"><img src="/wp-content/uploads/2019/04/prof_tree.png" alt="house"></div>';
    surface +='<input class="add-advert_input" type="text" placeholder="Surface du terrain">';
    surface +='</div>';
    return surface;
}

function EtageSelectHouse(){
    var select = '';
    select += '<div class="add-advert_level flex-type">';
    select += '<div class="add-advert_icon">';
    select +='<img src="/wp-content/uploads/2019/04/prof_stairs.png" alt="stairs"></div>';
    select += '<div class="custom-select" >';
    select += '<select>';
    select += '<option value="Étage">Étage</option>';
    select += '<option value="Plain-pied">Plain-pied</option>';
    select += '<option value="1">1</option>';
    select += '<option value="2">2</option>';
    select += '<option value="3">3</option>';
    select += '<option value="4">4</option>';
    select += '<option value="5">5</option>';
    select += '<option value="+ 8" class="plus">+ 8</option>';
    select += '</select>';
    select += '<div class="select-selected">Étage</div><div class="select-items select-hide"><div>Plain-pied</div><div>2</div><div>3</div><div>4</div><div>5</div><div>+ 8</div></div>'
    select += '</div>';
    select += '</div>';

    return select;
}

function EtageSelectAppartment(){
    var select = '';
    select += '<div class="add-advert_level flex-type">';
        select += '<div class="add-advert_icon"><img src="/wp-content/uploads/2019/04/prof_stairs.png" alt="stairs"></div>';
        select += '<div class="custom-select" >';
            select += '<select>';
            select += '<option value="Étage">Étage</option>';
            select += '<option value="RDC">RDC</option>';
            select += '<option value="RDJ">RDJ</option>';
            select += '<option value="1">1</option>';
            select += '<option value="2">2</option>';
            select += '<option value="3">3</option>';
            select += '<option value="4">4</option>';
            select += '<option value="5">5</option>';
            select += '<option value="+ 8" class="plus">+ 8</option>';
            select += '</select>';
            select += '<div class="select-selected">Étage</div>';
    select += '<div class="select-items select-hide"><div>RDC</div><div>RDJ</div><div>1</div><div>2</div><div>3</div><div>4</div><div>5</div><div>+ 8</div></div>';
    select += '</div>';
    select += '</div>';

    return select;


}



var addAdvert = document.getElementById('add-advert');//Main parent wrap
var selectWrap = document.getElementById('select_wrap');

var Selects = document.querySelectorAll(".custom-select");

HTMLElement.prototype.parentFinder = function(clName){
    if(this.classList.contains(clName)){
        return this;
    } else {
        if(this.parentElement != null){
            return this.parentElement.parentFinder(clName);
        }
    }
};

//Create  custom select
Selects.forEach(function(item){
    //item  div.custom-select
    selElmnt = item.getElementsByTagName("select")[0]; //  div.custom-select select
    divSelected = document.createElement("DIV");
    divSelected.setAttribute("class", "select-selected");
    divSelected.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
    item.appendChild(divSelected);
    divItems = document.createElement("DIV");
    divItems.setAttribute("class", "select-items ");//select-hide
    for (j = 1; j < selElmnt.length; j++) {
        // console.log(selElmnt.options[j].innerHTML);
        //for each option in the original select element,
        // create a new DIV that will act as an option item:
        optionItem = document.createElement("DIV");

        optionItem.innerHTML = selElmnt.options[j].innerHTML;
        divItems.appendChild(optionItem);
    }
    item.appendChild(divItems);
});

if(addAdvert) {
    addAdvert.addEventListener('click', function (e) {
        var inputWrap = document.getElementById('input_wrap');
        var SelectWrap = document.getElementById('select_wrap');

        var OpensMenu = document.getElementsByClassName('select-selected select-arrow-active');
        var OpensMenuCount =  OpensMenu.length;

        if(e.target.parentFinder('select-items')){ //If user click on some  option
            var options = e.target.parentFinder('select-items');
            var CurSelectedItem = options.previousElementSibling.innerHTML;
            var selectedItem = e.target.innerHTML;
            // Change text of CurSelected item  and close current menu

            options.previousElementSibling.innerHTML = selectedItem;
            selectMenu = $(options);
            jQuery(selectMenu).slideToggle("slow");

            // Remove selected before change to new one
            var allSelected = options.querySelector('.same-as-selected');
            if(allSelected){
                allSelected.removeAttribute("class");
            }

            //change option
            if ( !e.target.classList.contains('same-as-selected') ) {
                //check if exist selected items
                e.target.classList.add('same-as-selected');
            }

        }
        // Close menu if click out side select
        if (OpensMenuCount == 0){
            // Click on custom select  close / open
            if (e.target.classList.contains('select-selected')){
                curSelect = e.target;// div.select-selected
                divOptions = curSelect.nextSibling;

                jQuery(divOptions).slideToggle("slow");
               // curSelect.classList.toggle('select-arrow-active');
                //divOptions.classList.toggle('select-hide');
            }
        }else if(OpensMenuCount == 1){
            curSelect.classList.toggle('select-arrow-active');
            divOptions.classList.toggle('select-hide');
        }
        //Change view if select Maison option

        if (e.target.parentFinder('add-advert_type') && curSelect.innerHTML == 'Maison'){
            inputWrap.innerHTML = surface();
            SelectWrap.innerHTML = EtageSelectHouse();
        }else if (e.target.parentFinder('add-advert_type') && curSelect.innerHTML == 'Appartement'){
            inputWrap.innerHTML = ascenseur();
            SelectWrap.innerHTML = EtageSelectAppartment();
        }

    });
}

jQuery( "#clickme" ).click(function() {
    jQuery( "#book" ).slideToggle( "slow", function() {
        // Animation complete.
    });
});

/************************************* CUSTOM SELECT ********************************************/









//Slider on Agenda
const flkty = new Flickity('.main-gallery', {
    //options
    cellAlign: 'left',
    contain: true,
    wrapAround: true,
    draggable: false,
    adaptiveHeight: true
});


//Init the Calendar
let today = new Date();
let currentMonth = today.getMonth();
let currentYear = today.getFullYear();
let selectYear = document.getElementById("year");
let selectMonth = document.getElementById("month");

let months = ["JANUARY", "FEBRUARY", "MARCH", "APRIL", "May", "JUNE", "JULY", "AUGUST", "SEPTEMBER", "OCTOBER", "NOVEMBER", "DECEMBER"];

let yearField = document.getElementById("year_field");
let monthField = document.getElementById("month_field");
showCalendar(currentMonth, currentYear);


function next() {
    currentYear = (currentMonth === 11) ? currentYear + 1 : currentYear;
    currentMonth = (currentMonth + 1) % 12;
    showCalendar(currentMonth, currentYear);
}

function previous() {
    currentYear = (currentMonth === 0) ? currentYear - 1 : currentYear;
    currentMonth = (currentMonth === 0) ? 11 : currentMonth - 1;
    showCalendar(currentMonth, currentYear);
}


function showCalendar(month, year) {

    let firstDay = (new Date(year, month)).getDay();
    let daysInMonth = 32 - new Date(year, month, 32).getDate();
    let daysInPrevMonth = 32 - new Date(year, month - 1, 32).getDate();

    let tbl = document.getElementById("calendar-body"); // body of the calendar

    // clearing all previous cells
    if(tbl) {
        tbl.innerHTML = "";
    }

    // filing data about month and in the page via DOM.

    if(yearField) {
        yearField.innerHTML = year;
    }
    if (monthField) {
        monthField.innerHTML = months[month];
    }

    // selectYear.value = year;
    // selectMonth.value = month;

    // creating all cells
    let date = 1;
    for (let i = 0; i < 6; i++) {
        // creates a table row
        let row = document.createElement("div");
        row.setAttribute('class', 'day-rows')

        if (date > daysInMonth) {
            break;
        }
        //creating individual cells, filing them up with data.
        for (let j = 0; j < 7; j++) {
            if (i === 0 && j < firstDay) {
                let cell = document.createElement("div");
                // TODO: echo prev month days
                let cellText = document.createTextNode(daysInPrevMonth - firstDay + j + 1);
                cell.appendChild(cellText);
                row.appendChild(cell);
            }

            else {
                let cell = document.createElement("div");
                let cellText = document.createTextNode(date);

                if (date === today.getDate() && year === today.getFullYear() && month === today.getMonth()) {
                    cell.classList.add("bg-info");
                } // color today's date


                if (date > daysInMonth) {
                    // TODO: echo next month days
                    cellText = document.createTextNode(date - daysInMonth);
                }
                cell.appendChild(cellText);
                row.appendChild(cell);
                date++;
            }


        }
       if (tbl) {
           tbl.appendChild(row); // appending each row into calendar body.
       }

    }

}

jQuery('#modife-profile').click(function() {
    jQuery('.profile-info-container .form-control').addClass('active').removeAttr('readonly');
})
jQuery('#ere_update_profile').click(function() {
    jQuery('.profile-info-container .form-control').removeClass('active').attr('readonly', 'true');
})

