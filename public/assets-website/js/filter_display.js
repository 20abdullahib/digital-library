// function filterBy(filterValue) {
//     var Items = document.querySelectorAll(".filter-items");
//     Items.forEach(function (item) {
//         var department = item.getAttribute("data-department");
//         var category = item.getAttribute("data-category");
//         var professor = item.getAttribute("data-professor");
//         var filterIs = [
//             department,
//             category,
//             professor,
//             Allcategory,
//             Alldepartment,
//             Allprofessor,
//         ];
//         filterIs.forEach((element) => {
//             if (filterValue === element) {
//                 item.style.display = "block";
//             } else {
//                 item.style.display = "none";
//             }
//         });

//         // if (
//         //     filterValue === department ||
//         //     filterValue === category ||
//         //     filterValue === professor
//         // ) {
//         //     item.style.display = "block";
//         // } else {
//         //     item.style.display = "none";
//         // }
//     });
// }

function filterBy(filterValue) {
    var Items = document.querySelectorAll(".filter-items");
    Items.forEach(function (item) {
        var department = item.getAttribute("data-department");
        var category = item.getAttribute("data-category");
        var professor = item.getAttribute("data-professor");
        var Allcategory = "Allcategory"; 
        var Alldepartment = "Alldepartment";
        var Allprofessor = "Allprofessor"; 
        var filterIs = [
            department,
            category,
            professor,
            Allcategory,
            Alldepartment,
            Allprofessor,
        ];

        var shouldDisplay = filterIs.includes(filterValue);

        if (shouldDisplay) {
            item.style.display = "block";
        } else {
            item.style.display = "none";
        }
    });
}

// --------------------------------
$(document).ready(function() {
    $('.category-dropdown').on('click', function() {
      // Toggle the dropdown content
      $('.dropdown-content', $(this).parent()).toggle();
  
      // Close other open dropdowns (optional)
      $('.dropdown-content').not($(this).siblings('.dropdown-content')).hide();
    });
  
    // Handle click on dropdown items (apply filter logic here)
    $('.dropdown-content a').on('click', function() {
      // Update selected filter, trigger AJAX request, or DOM manipulation as needed
      // ...
    });
  });
  