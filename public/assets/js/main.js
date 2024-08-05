
(function() {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    if (all) {
      select(el, all).forEach(e => e.addEventListener(type, listener))
    } else {
      select(el, all).addEventListener(type, listener)
    }
  }

  /**
   * Easy on scroll event listener 
   */
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }

  /**
   * Sidebar toggle
   */
  if (select('.toggle-sidebar-btn')) {
    on('click', '.toggle-sidebar-btn', function(e) {
      select('body').classList.toggle('toggle-sidebar')
    })
  }

  /**
   * Search bar toggle
   */
  if (select('.search-bar-toggle')) {
    on('click', '.search-bar-toggle', function(e) {
      select('.search-bar').classList.toggle('search-bar-show')
    })
  }

  /**
   * Navbar links active state on scroll
   */
  let navbarlinks = select('#navbar .scrollto', true)
  const navbarlinksActive = () => {
    let position = window.scrollY + 200
    navbarlinks.forEach(navbarlink => {
      if (!navbarlink.hash) return
      let section = select(navbarlink.hash)
      if (!section) return
      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        navbarlink.classList.add('active')
      } else {
        navbarlink.classList.remove('active')
      }
    })
  }
  window.addEventListener('load', navbarlinksActive)
  onscroll(document, navbarlinksActive)

  /**
   * Toggle .header-scrolled class to #header when page is scrolled
   */
  let selectHeader = select('#header')
  if (selectHeader) {
    const headerScrolled = () => {
      if (window.scrollY > 100) {
        selectHeader.classList.add('header-scrolled')
      } else {
        selectHeader.classList.remove('header-scrolled')
      }
    }
    window.addEventListener('load', headerScrolled)
    onscroll(document, headerScrolled)
  }

  /**
   * Back to top button
   */
  let backtotop = select('.back-to-top')
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add('active')
      } else {
        backtotop.classList.remove('active')
      }
    }
    window.addEventListener('load', toggleBacktotop)
    onscroll(document, toggleBacktotop)
  }


  /**
   * Initiate tooltips
   */
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
  })

  /**
   * Initiate quill editors
   */
  if (select('.quill-editor-default')) {
    new Quill('.quill-editor-default', {
      theme: 'snow'
    });
  }

  if (select('.quill-editor-bubble')) {
    new Quill('.quill-editor-bubble', {
      theme: 'bubble'
    });
  }

  if (select('.quill-editor-full')) {
    new Quill(".quill-editor-full", {
      modules: {
        toolbar: [
          [{
            font: []
          }, {
            size: []
          }],
          ["bold", "italic", "underline", "strike"],
          [{
              color: []
            },
            {
              background: []
            }
          ],
          [{
              script: "super"
            },
            {
              script: "sub"
            }
          ],
          [{
              list: "ordered"
            },
            {
              list: "bullet"
            },
            {
              indent: "-1"
            },
            {
              indent: "+1"
            }
          ],
          ["direction", {
            align: []
          }],
          ["link", "image", "video"],
          ["clean"]
        ]
      },
      theme: "snow"
    });
  }

  /**
   * Initiate TinyMCE Editor
   */

  const useDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;
  const isSmallScreen = window.matchMedia('(max-width: 1023.5px)').matches;

  tinymce.init({
    selector: 'textarea.tinymce-editor',
    plugins: 'preview importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media codesample table charmap pagebreak nonbreaking anchor insertdatetime advlist lists wordcount help charmap quickbars emoticons accordion',
    editimage_cors_hosts: ['picsum.photos'],
    menubar: 'file edit view insert format tools table help',
    toolbar: "undo redo | accordion accordionremove | blocks fontfamily fontsize | bold italic underline strikethrough | align numlist bullist | link image | table media | lineheight outdent indent| forecolor backcolor removeformat | charmap emoticons | code fullscreen preview | save print | pagebreak anchor codesample | ltr rtl",
    autosave_ask_before_unload: true,
    autosave_interval: '30s',
    autosave_prefix: '{path}{query}-{id}-',
    autosave_restore_when_empty: false,
    autosave_retention: '2m',
    image_advtab: true,
    link_list: [{
        title: 'My page 1',
        value: 'https://www.tiny.cloud'
      },
      {
        title: 'My page 2',
        value: 'http://www.moxiecode.com'
      }
    ],
    image_list: [{
        title: 'My page 1',
        value: 'https://www.tiny.cloud'
      },
      {
        title: 'My page 2',
        value: 'http://www.moxiecode.com'
      }
    ],
    image_class_list: [{
        title: 'None',
        value: ''
      },
      {
        title: 'Some class',
        value: 'class-name'
      }
    ],
    importcss_append: true,
    file_picker_callback: (callback, value, meta) => {
      /* Provide file and text for the link dialog */
      if (meta.filetype === 'file') {
        callback('https://www.google.com/logos/google.jpg', {
          text: 'My text'
        });
      }

      /* Provide image and alt text for the image dialog */
      if (meta.filetype === 'image') {
        callback('https://www.google.com/logos/google.jpg', {
          alt: 'My alt text'
        });
      }

      /* Provide alternative source and posted for the media dialog */
      if (meta.filetype === 'media') {
        callback('movie.mp4', {
          source2: 'alt.ogg',
          poster: 'https://www.google.com/logos/google.jpg'
        });
      }
    },
    height: 600,
    image_caption: true,
    quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
    noneditable_class: 'mceNonEditable',
    toolbar_mode: 'sliding',
    contextmenu: 'link image table',
    skin: useDarkMode ? 'oxide-dark' : 'oxide',
    content_css: useDarkMode ? 'dark' : 'default',
    content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
  });

  /**
   * Initiate Bootstrap validation check
   */
  var needsValidation = document.querySelectorAll('.needs-validation')

  Array.prototype.slice.call(needsValidation)
    .forEach(function(form) {
      form.addEventListener('submit', function(event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })

  /**
   * Initiate Datatables
   */
  // const datatables = select('.datatable', true)
  // datatables.forEach(datatable => {
  //   new simpleDatatables.DataTable(datatable, {
  //     perPageSelect: [5, 10, 15, ["All", -1]],
  //     columns: [{
  //         select: 2,
  //         sortSequence: ["desc", "asc"]
  //       },
  //       {
  //         select: 3,
  //         sortSequence: ["desc"]
  //       },
  //       {
  //         select: 4,
  //         cellClass: "green",
  //         headerClass: "red"
  //       }
  //     ]
  //   });
  // })

  $(document).ready(function() {
    var table = $('#example').DataTable({
      "scrollX": true,
      "paging": true,
      "searching": true,
      "lengthMenu": [5, 10, 25, 50, 100],
      fixedHeader: true,
      fixedColumns: true
  });
});

  /**
   * Autoresize echart charts
   */
  const mainContainer = select('#main');
  if (mainContainer) {
    setTimeout(() => {
      new ResizeObserver(function() {
        select('.echart', true).forEach(getEchart => {
          echarts.getInstanceByDom(getEchart).resize();
        })
      }).observe(mainContainer);
    }, 200);
  }

})();

function navigateTo(url) {
  window.location.href = url;
}

function setRW() {
  const alamatDropdown = document.getElementById("alamat");
  const rwDropdown = document.getElementById("rw");
  const rtDropdowns = document.getElementById("rt");

  if (alamatDropdown.value === "Manggungmangu") {    

    rwDropdown.querySelectorAll("option").forEach((option) => {
      option.selected = option.value == "1";
      option.hidden = option.value !== "1";
    });

    rtDropdowns.querySelectorAll("option").forEach(
      rtOption => rtOption.hidden = ["21", "20", "19"].includes(rtOption.value)
    );

  } else if (alamatDropdown.value === "Parakan") {

    rwDropdown.querySelectorAll("option").forEach((option) => {
      option.selected = option.value == "2";
      option.hidden = option.value !== "2";
    });

    rtDropdowns.querySelectorAll("option").forEach(
      rtOption => rtOption.hidden = ["21", "20", "19"].includes(rtOption.value)
    );

  } else if (alamatDropdown.value === "Tambirejo") {
    rwDropdown.querySelectorAll("option").forEach((option) => {
      option.selected = option.value == "3";
      option.hidden = option.value !== "3";
    });

    rtDropdowns.querySelectorAll("option").forEach((rtOption) => {
      rtOption.hidden = rtOption.value !== "21";
      rtOption.selected = rtOption.value == "21";
    });
  }
}

function auto_fill_1() {
  var nik = $("#nik_1").val();
  $.ajax({
      url: '/get-penduduk',  // URL menuju rute Laravel
      type: 'GET',
      data: { nik: nik },
      success: function (data) {
          $('#nama_1').val(data.nama);
          $('#noKK_1').val(data.noKK);
          $('#tempatLahir_1').val(data.tempatLahir);
          $('#tanggalLahir_1').val(data.tanggalLahir);
          $('#alamat_1').val(data.alamat);
          $('#rt_1').val(data.rt);
          $('#rw_1').val(data.rw);
          $('#agama_1').val(data.agama);
          $('#pekerjaan_1').val(data.pekerjaan_id); 
          $('#kewarganegaraan_1').val(data.kewarganegaraan);

      },
      error: function (jqXHR, textStatus, errorThrown) {
          console.log('Error: ' + textStatus + ' - ' + errorThrown);
      }
  });
}

function auto_fill_2() { 
  var nik = $("#nik_2").val();
  $.ajax({
      url: '/get-penduduk',  // URL menuju rute Laravel
      type: 'GET',
      data: { nik: nik },
      success: function (data) {
          $('#nama_2').val(data.nama);
          $('#noKK_2').val(data.noKK);
          $('#tempatLahir_2').val(data.tempatLahir);
          $('#tanggalLahir_2').val(data.tanggalLahir);
          $('#alamat_2').val(data.alamat);
          $('#rt_2').val(data.rt);
          $('#rw_2').val(data.rw);
          $('#agama_2').val(data.agama);
          $('#pekerjaan_2').val(data.pekerjaan_id); 
          $('#kewarganegaraan_2').val(data.kewarganegaraan);
          $('#shdk_2').val(data.shdk);

      },
      error: function (jqXHR, textStatus, errorThrown) {
          console.log('Error: ' + textStatus + ' - ' + errorThrown);
      }
  });
}

function auto_fill_3() {
  var nik = $("#nik_3").val();
  $.ajax({
      url: '/get-penduduk',  // URL menuju rute Laravel
      type: 'GET',
      data: { nik: nik },
      success: function (data) {
          $('#nama_3').val(data.nama);
          $('#noKK_3').val(data.noKK);
          $('#tempatLahir_3').val(data.tempatLahir);
          $('#tanggalLahir_3').val(data.tanggalLahir);
          $('#alamat_3').val(data.alamat);
          $('#rt_3').val(data.rt);
          $('#rw_3').val(data.rw);
          $('#agama_3').val(data.agama);
          $('#pekerjaan_3').val(data.pekerjaan_id); 
          $('#kewarganegaraan_3').val(data.kewarganegaraan);

      },
      error: function (jqXHR, textStatus, errorThrown) {
          console.log('Error: ' + textStatus + ' - ' + errorThrown);
      }
  });
}

function auto_fill_4() {
  var nik = $("#nik_4").val();
  $.ajax({
      url: '/get-penduduk',  // URL menuju rute Laravel
      type: 'GET',
      data: { nik: nik },
      success: function (data) {
          $('#nama_4').val(data.nama);
          $('#noKK_4').val(data.noKK);
          $('#tempatLahir_4').val(data.tempatLahir);
          $('#tanggalLahir_4').val(data.tanggalLahir);
          $('#alamat_4').val(data.alamat);
          $('#rt_4').val(data.rt);
          $('#rw_4').val(data.rw);
          $('#agama_4').val(data.agama);
          $('#pekerjaan_4').val(data.pekerjaan_id);           

      },
      error: function (jqXHR, textStatus, errorThrown) {
          console.log('Error: ' + textStatus + ' - ' + errorThrown);
      }
  });
}

function auto_fill_saksi_1() {
  var nik = $("#nik_saksi_1").val();  
  $.ajax({
      url: '/get-penduduk',  // URL menuju rute Laravel
      type: 'GET',
      data: { nik: nik },      
      success: function (data) {
          $('#nama_saksi_1').val(data.nama);
          $('#noKK_saksi_1').val(data.noKK);
          $('#tempatLahir_saksi_1').val(data.tempatLahir);
          $('#tanggalLahir_saksi_1').val(data.tanggalLahir);
          $('#alamat_saksi_1').val(data.alamat);
          $('#rt_saksi_1').val(data.rt);
          $('#rw_saksi_1').val(data.rw);
          $('#agama_saksi_1').val(data.agama);
          $('#pekerjaan_saksi_1').val(data.pekerjaan_id);           

      },
      error: function (jqXHR, textStatus, errorThrown) {
          console.log('Error: ' + textStatus + ' - ' + errorThrown);
      }
  });
}

function auto_fill_saksi_2() {
  var nik = $("#nik_saksi_2").val();  
  $.ajax({
      url: '/get-penduduk',  // URL menuju rute Laravel
      type: 'GET',
      data: { nik: nik },      
      success: function (data) {
          $('#nama_saksi_2').val(data.nama);
          $('#noKK_saksi_2').val(data.noKK);
          $('#tempatLahir_saksi_2').val(data.tempatLahir);
          $('#tanggalLahir_saksi_2').val(data.tanggalLahir);
          $('#alamat_saksi_2').val(data.alamat);
          $('#rt_saksi_2').val(data.rt);
          $('#rw_saksi_2').val(data.rw);
          $('#agama_saksi_2').val(data.agama);
          $('#pekerjaan_saksi_2').val(data.pekerjaan_id);           

      },
      error: function (jqXHR, textStatus, errorThrown) {
          console.log('Error: ' + textStatus + ' - ' + errorThrown);
      }
  });
}




function showPage(pageId) {
  const currentActive = document.querySelector('.page.active');
  const nextPage = document.getElementById(pageId);
  
  if (currentActive) {
      currentActive.classList.remove('active');
      currentActive.classList.add('hidden');
      
      // Set direction of current page transition
      if (nextPage.id === '2' || nextPage.id === '3' || nextPage.id === '4' || nextPage.id === '5' || nextPage.id === '6') {
          currentActive.classList.add('right');
      } else {
          currentActive.classList.add('left');
      }
  }

  // Show the next page
  nextPage.classList.remove('hidden', 'left', 'right');
  nextPage.classList.add('active');
}

// Menampilkan halaman pertama secara default
document.addEventListener('DOMContentLoaded', () => {
  showPage('1');
});


// Add Form
  let rowCount = 1;

  function addRow() {
    const container = document.getElementById('register-form');
    const newRow = document.createElement('div');
    newRow.className = 'form-row';
    newRow.id = `row-${rowCount}`;

    newRow.innerHTML = `
      <div class="form-group">
        <label for="nik_${rowCount}">NIK</label>
        <select name="nik_${rowCount}" id="nik_${rowCount}" onchange="auto_fill(${rowCount})" required>
          <option value=""></option>
          @foreach($penduduk as $data)
            <option value="{{ $data->nik }}">{{ $data->nik }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="nama_${rowCount}">Nama</label>
        <input type="text" name="nama_${rowCount}" id="nama_${rowCount}" required/>
      </div>
      <div class="form-group">
        <label for="shdk_${rowCount}">Status</label>
        <input type="text" name="shdk_${rowCount}" id="shdk_${rowCount}" required/>
      </div>
       <button type="button" onclick="removeRow('row-${rowCount}')">Hapus</button>
    `;

    container.appendChild(newRow);
    rowCount++;
  }

  function removeRow(rowId) {
    const row = document.getElementById(rowId);
    if (row) {
      row.parentNode.removeChild(row);
    }
  }

  function auto_fill(rowId) {
    // Implement your auto_fill logic here
    // For example, you might use AJAX to fetch data based on selected NIK
  }

/*--------------------------------------------------------------
# Slide Show Image
--------------------------------------------------------------*/
let slideIndex = 0;
showSlides();

function showSlides() {
    let slides = document.getElementsByClassName("mySlides");
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    slides[slideIndex-1].style.display = "block";  
    setTimeout(showSlides, 3000); // Ganti gambar setiap 3 detik
}

