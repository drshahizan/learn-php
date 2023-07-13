//[Data Table Javascript]

$(function () {
    "use strict";
	
    $(document).ready(function () {

         var table = $('#project-table').DataTable({
             "data": testdata.data,
			 "searching": true,
			 "paging":   true,
			 "info":     true,
             select:"single",
             "columns": [
                 {
                     "className": 'details-control',
                     "orderable": false,
                     "data": null,
                     "defaultContent": '',
                     "render": function () {
                         return '';
                     },
                     width:"15px"
                 },
                 { "data": "name" },
				 { "data": "status" },
				 { "data": "starts" },
				 { "data": "ends" },
				 { "data": "est" },
				 { "data": "contacts" },
				 { "data": "tracker" },

             ],
             "order": [[1, 'asc']]
         });

         // Add event listener for opening and closing details
         $('#project-table tbody').on('click', 'td.details-control', function () {
             var tr = $(this).closest('tr');
             var tdi = tr.find("i.fa");
             var row = table.row(tr);

             if (row.child.isShown()) {
                 // This row is already open - close it
                 row.child.hide();
                 tr.removeClass('shown');
                 tdi.first().removeClass('fa-minus-square');
                 tdi.first().addClass('fa-plus-square');
             }
             else {
                 // Open this row
                 row.child(format(row.data())).show();
                 tr.addClass('shown');
                 tdi.first().removeClass('fa-plus-square');
                 tdi.first().addClass('fa-minus-square');
             }
         });

         table.on("user-select", function (e, dt, type, cell, originalEvent) {
             if ($(cell.node()).hasClass("details-control")) {
                 e.preventDefault();
             }
         });
     });

    function format(d){
        
         // `d` is the original data object for the row
         return '<table cellpadding="6" cellspacing="0" border="0" style="padding-left:50px; width:100%;">' +
            '<tr>'+
				'<td style="width:100px">Project Title:</td>'+
				'<td>'+d.name+'</td>'+
			'</tr>'+
			'<tr>'+
				'<td>Deadline:</td>'+
				'<td>'+d.ends+'</td>'+
			'</tr>'+
			'<tr>'+
				'<td>Extra info:</td>'+
				'<td>And any further details here (images etc)...</td>'+
			'</tr>'+
			'<tr>'+
				'<td>Comments:</td>'+
				'<td>'+d.comments+'</td>'+
			'</tr>'+
			'<tr>'+
				'<td>Action:</td>'+
				'<td>'+d.action+'</td>'+
			'</tr>'+
         '</table>';  
    }

    var testdata = {
    "data": [
    {
    "name": "Sharepoint Upgrade<br><small class='text-muted'><i>Budget: 5,000<i></small>",
	"est": "<td><div class='progress progress-sm'><div class='progress-bar progress-bar-info progress-bar-striped' role='progressbar' aria-valuenow='60' aria-valuemin='0' aria-valuemax='100' style='width: 60%'></div></div></td>",
	"contacts": "<div class='project-members'><a href='javascript:void(0)'><img src='../../../images/avatar/1.jpg' class='offline' alt='user'></a> </div> ",
	"status": "<span class='badge badge-success'>Active</span>",	
	"tracker": "<button type='button' class='btn btn-sm btn-toggle btn-info active' data-toggle='button' aria-pressed='true'><span class='handle'></span></button>",
	"starts": "01-21-2017",
	"ends": "<strong>02-30-2018</strong>",
	"comments": "This is a blank comments area, used to add comments and keep notes",
	"action": "<button class='btn btn-xs'>Open case</button> <button class='btn btn-xs btn-danger pull-right' style='margin-left:5px'>Delete Record</button> <button class='btn btn-xs btn-success pull-right'>Save Changes</button> "
    },
    {
	"name": "IT Room Renovation<br><small class='text-muted'><i>Budget: 25,000<i></small>",
	"est": "<td><div class='progress progress-sm'><div class='progress-bar progress-bar-success progress-bar-striped' role='progressbar' aria-valuenow='30' aria-valuemin='0' aria-valuemax='100' style='width: 30%'></div></div></td>",
	"contacts": "<div class='project-members'><a href='javascript:void(0)'><img src='../../../images/avatar/2.jpg' class='online'></a> <a href='javascript:void(0)'><img src='../../../images/avatar/4.jpg' class='busy'></a><a href='javascript:void(0)'><img src='../../../images/avatar/3.jpg' class='away'></a> </div> ",
	"status": "<span class='badge badge-success'>Active</span>",
	"tracker": "<button type='button' class='btn btn-sm btn-toggle btn-info' data-toggle='button' aria-pressed='true'><span class='handle'></span></button>",
	"starts": "01-17-2017",
	"ends": "<strong>02-30-2018</strong>",
	"comments": "This is a blank comments area, used to add comments and keep notes",
	"action": "<button class='btn btn-xs'>Open case</button> <button class='btn btn-xs btn-danger pull-right' style='margin-left:5px'>Delete Record</button> <button class='btn btn-xs btn-success pull-right'>Save Changes</button> "
	},   
	{
	"name": "Car Industry Studies<br><small class='text-muted'><i>Budget: 1,000<i></small>",
	"est": "<td><div class='progress progress-sm'><div class='progress-bar progress-bar-primary progress-bar-striped' role='progressbar' aria-valuenow='55' aria-valuemin='0' aria-valuemax='100' style='width: 55%'></div></div></td>",
	"contacts": "<div class='project-members'><a href='javascript:void(0)'><img src='../../../images/avatar/1.jpg' class='online' alt='user'></a><a href='javascript:void(0)'><img src='../../../images/avatar/2.jpg' class='online'></a> </div> ",
	"status": "<span class='badge badge-success'>Active</span>",
	"tracker": "<button type='button' class='btn btn-sm btn-toggle btn-info active' data-toggle='button' aria-pressed='true'><span class='handle'></span></button>",
	"starts": "01-8-2017",
	"ends": "<strong>03-03-2018</strong>",
	"comments": "This is a blank comments area, used to add comments and keep notes",
	"action": "<button class='btn btn-xs'>Open case</button> <button class='btn btn-xs btn-danger pull-right' style='margin-left:5px'>Delete Record</button> <button class='btn btn-xs btn-success pull-right'>Save Changes</button> "
	},   
	{
	"name": "Update all forms <br><small class='text-muted'><i>Budget: 2,000<i></small>",
	"est": "<td><div class='progress progress-sm'><div class='progress-bar progress-bar-warning progress-bar-striped' role='progressbar' aria-valuenow='68' aria-valuemin='0' aria-valuemax='100' style='width: 68%'></div></div></td>",
	"contacts": "<div class='project-members'><a href='javascript:void(0)'><img src='../../../images/avatar/5.jpg' class='busy'></a> </div> ",
	"status": "<span class='badge badge-success'>Active</span>",
	"tracker": "<button type='button' class='btn btn-sm btn-toggle btn-info' data-toggle='button' aria-pressed='true'><span class='handle'></span></button>",
	"starts": "01-12-2017",
	"ends": "<strong>03-15-2018</strong>",
	"comments": "This is a blank comments area, used to add comments and keep notes",
	"action": "<button class='btn btn-xs'>Open case</button> <button class='btn btn-xs btn-danger pull-right' style='margin-left:5px'>Delete Record</button> <button class='btn btn-xs btn-success pull-right'>Save Changes</button> "
	},   
	{
	"name": "Preliminary studies of client intel<br><small class='text-muted'><i>Budget: 3,500<i></small>",
	"est": "<td><div class='progress progress-sm'><div class='progress-bar progress-bar-danger progress-bar-striped' role='progressbar' aria-valuenow='10' aria-valuemin='0' aria-valuemax='100' style='width: 10%'></div></div></td>",
	"contacts": "<div class='project-members'><a href='javascript:void(0)'><img src='../../../images/avatar/6.jpg' class='online'></a> <a href='javascript:void(0)'><img src='../../../images/avatar/3.jpg' class='busy'></a></div> ",
	"status": "<span class='badge badge-success'>Active</span>",
	"tracker": "<button type='button' class='btn btn-sm btn-toggle btn-info' data-toggle='button' aria-pressed='true'><span class='handle'></span></button>",
	"starts": "01-13-2017",
	"ends": "<strong>06-20-2018</strong>",
	"comments": "This is a blank comments area, used to add comments and keep notes",
	"action": "<button class='btn btn-xs'>Open case</button> <button class='btn btn-xs btn-danger pull-right' style='margin-left:5px'>Delete Record</button> <button class='btn btn-xs btn-success pull-right'>Save Changes</button> "
	},   
	{
	"name": "AngularJS UI design and development<br><small class='text-muted'><i>Budget: 5,000<i></small>",
	"est": "<td><div class='progress progress-sm'><div class='progress-bar progress-bar-info progress-bar-striped' role='progressbar' aria-valuenow='15' aria-valuemin='0' aria-valuemax='100' style='width: 15%'></div></div></td>",
	"contacts": "<div class='project-members'><a href='javascript:void(0)'><a href='javascript:void(0)'><img src='../../../images/avatar/1.jpg' class='away'></a><a href='javascript:void(0)'><img src='../../../images/avatar/5.jpg' class='away'></a> </div> ",
	"status": "<span class='badge badge-success'>Active</span>",
	"tracker": "<button type='button' class='btn btn-sm btn-toggle btn-info active' data-toggle='button' aria-pressed='true'><span class='handle'></span></button>",
	"starts": "01-9-2017",
	"ends": "<strong>08-01-2018</strong>",
	"comments": "This is a blank comments area, used to add comments and keep notes",
	"action": "<button class='btn btn-xs'>Open case</button> <button class='btn btn-xs btn-danger pull-right' style='margin-left:5px'>Delete Record</button> <button class='btn btn-xs btn-success pull-right'>Save Changes</button> "
	},   
	{
	"name": "<strong>Phase 1</strong>: Modual implimentations<br><small class='text-muted'><i>Budget: 7,000<i></small>",
	"est": "<td><div class='progress progress-sm'><div class='progress-bar progress-bar-primary progress-bar-striped' role='progressbar' aria-valuenow='100' aria-valuemin='0' aria-valuemax='100' style='width: 100%'></div></div></td>",
	"contacts": "<div class='project-members'><a href='javascript:void(0)'><img src='../../../images/avatar/4.jpg' class='online' alt='user'></a></div> ",
	"status": "<span class='badge badge-default'>Inactive</span>",
	"tracker": "<button type='button' class='btn btn-sm btn-toggle btn-info' data-toggle='button' aria-pressed='true'><span class='handle'></span></button>",
	"starts": "01-4-2017",
	"ends": "<strong>09-11-2019</strong>",
	"comments": "This is a blank comments area, used to add comments and keep notes",
	"action": "<button class='btn btn-xs'>Open case</button> <button class='btn btn-xs btn-danger pull-right' style='margin-left:5px'>Delete Record</button> <button class='btn btn-xs btn-success pull-right'>Save Changes</button> "
	},   
	{
	"name": "<strong>Phase 2</strong>: Beta testing<br><small class='text-muted'><i>No budget was locked in<i></small>",
	"est": "<td><div class='progress progress-sm'><div class='progress-bar progress-bar-success progress-bar-striped' role='progressbar' aria-valuenow='15' aria-valuemin='0' aria-valuemax='100' style='width: 15%'></div></div></td>",
	"contacts": "<div class='project-members'><a href='javascript:void(0)'><img src='../../../images/avatar/2.jpg' class='offline'></a> </div> ",
	"status": "<span class='badge badge-success'>Active</span>",
	"tracker": "<button type='button' class='btn btn-sm btn-toggle btn-info' data-toggle='button' aria-pressed='true'><span class='handle'></span></button>",
	"starts": "01-11-2017",
	"ends": "<strong>07-11-2018</strong>",
	"comments": "This is a blank comments area, used to add comments and keep notes",
	"action": "<button class='btn btn-xs'>Open case</button> <button class='btn btn-xs btn-danger pull-right' style='margin-left:5px'>Delete Record</button> <button class='btn btn-xs btn-success pull-right'>Save Changes</button> "
	},   
	{
	"name": "<strong>Phase 3</strong>: Deploy to management<br><small class='text-muted'><i>No budget was locked in<i></small>",
	"est": "<td><div class='progress progress-sm'><div class='progress-bar progress-bar-warning progress-bar-striped' role='progressbar' aria-valuenow='10' aria-valuemin='0' aria-valuemax='100' style='width: 10%'></div></div></td>",
	"contacts": "<div class='project-members'><a href='javascript:void(0)'><img src='../../../images/avatar/1.jpg' class='offline'></a> <a href='javascript:void(0)'><img src='../../../images/avatar/2.jpg' class='busy'></a></div> ",
	"status": "<span class='badge badge-success'>Active</span>",
	"tracker": "<button type='button' class='btn btn-sm btn-toggle btn-info' data-toggle='button' aria-pressed='true'><span class='handle'></span></button>",
	"starts": "01-19-2017",
	"ends": "08-30-2018",
	"comments": "This is a blank comments area, used to add comments and keep notes",
	"action": "<button class='btn btn-xs'>Open case</button> <button class='btn btn-xs btn-danger pull-right' style='margin-left:5px'>Delete Record</button> <button class='btn btn-xs btn-success pull-right'>Save Changes</button> "
	},   
	{
	"name": "Prepare property management contracts<br><small class='text-muted'><i>No budget was locked in<i></small>",
	"est": "<td><div class='progress progress-sm'><div class='progress-bar progress-bar-primary progress-bar-striped' role='progressbar' aria-valuenow='55' aria-valuemin='0' aria-valuemax='100' style='width: 55%'></div></div></td>",
	"contacts": "<div class='project-members'><a href='javascript:void(0)'><img src='../../../images/avatar/8.jpg' class='online'></a></div> ",
	"status": "<span class='badge badge-success'>Active</span>",
	"tracker": "<button type='button' class='btn btn-sm btn-toggle btn-info' data-toggle='button' aria-pressed='true'><span class='handle'></span></button>",
	"starts": "01-20-2017",
	"ends": "<strong>02-30-2018</strong>",
	"comments": "This is a blank comments area, used to add comments and keep notes",
	"action": "<button class='btn btn-xs'>Open case</button> <button class='btn btn-xs btn-danger pull-right' style='margin-left:5px'>Delete Record</button> <button class='btn btn-xs btn-success pull-right'>Save Changes</button> "
	},   
	{
	"name": "Brick factory<br><small class='text-muted'><i>Budget: 1,000<i></small>",
	"est": "<td><div class='progress progress-sm'><div class='progress-bar progress-bar-info progress-bar-striped' role='progressbar' aria-valuenow='775' aria-valuemin='0' aria-valuemax='100' style='width: 75%'></div></div></td>",
	"contacts": "<div class='project-members'><a href='javascript:void(0)'><img src='../../../images/avatar/7.jpg' class='online'></a> <a href='javascript:void(0)'><img src='../../../images/avatar/3.jpg' class='busy'></a><a href='javascript:void(0)'><img src='../../../images/avatar/2.jpg' class='away'></a> </div> ",
	"status": "<span class='badge badge-success'>Active</span>",
	"tracker": "<button type='button' class='btn btn-sm btn-toggle btn-info' data-toggle='button' aria-pressed='true'><span class='handle'></span></button>",
	"starts": "01-25-2017",
	"ends": "<strong>03-03-2018</strong>",
	"comments": "This is a blank comments area, used to add comments and keep notes",
	"action": "<button class='btn btn-xs'>Open case</button> <button class='btn btn-xs btn-danger pull-right' style='margin-left:5px'>Delete Record</button> <button class='btn btn-xs btn-success pull-right'>Save Changes</button> "
	},   
	{
	"name": "Upgrade to windows 8.1<br><small class='text-muted'><i>Budget: 2,000<i></small>",
	"est": "<td><div class='progress progress-sm'><div class='progress-bar progress-bar-success progress-bar-striped' role='progressbar' aria-valuenow='48' aria-valuemin='0' aria-valuemax='100' style='width: 48%'></div></div></td>",
	"contacts": "<div class='project-members'><a href='javascript:void(0)'><img src='../../../images/avatar/7.jpg' class='online' alt='user'></a><a href='javascript:void(0)'><img src='../../../images/avatar/3.jpg' class='online'></a></div> ",
	"status": "<span class='badge badge-success'>Active</span>",
	"tracker": "<button type='button' class='btn btn-sm btn-toggle btn-info' data-toggle='button' aria-pressed='true'><span class='handle'></span></button>",
	"starts": "01-27-2017",
	"ends": "<strong>02-30-2018</strong>",
	"comments": "This is a blank comments area, used to add comments and keep notes",
	"action": "<button class='btn btn-xs'>Open case</button> <button class='btn btn-xs btn-danger pull-right' style='margin-left:5px'>Delete Record</button> <button class='btn btn-xs btn-success pull-right'>Save Changes</button> "
	},   
	{
	"name": "Refurbish Architecture<br><small class='text-muted'><i>Budget: 1,200<i></small>",
	"est": "<td><div class='progress progress-sm'><div class='progress-bar progress-bar-danger progress-bar-striped' role='progressbar' aria-valuenow='37' aria-valuemin='0' aria-valuemax='100' style='width: 37%'></div></div></td>",
	"contacts": "<div class='project-members'><a href='javascript:void(0)'><img src='../../../images/avatar/7.jpg' class='away' alt='user'></a><a href='javascript:void(0)'><img src='../../../images/avatar/5.jpg' class='online'></a> </div> ",
	"status": "<span class='badge badge-success'>Active</span>",
	"tracker": "<button type='button' class='btn btn-sm btn-toggle btn-info' data-toggle='button' aria-pressed='true'><span class='handle'></span></button>",
	"starts": "01-29-2017",
	"ends": "<strong>12-15-2019</strong>",
	"comments": "This is a blank comments area, used to add comments and keep notes",
	"action": "<button class='btn btn-xs'>Open case</button> <button class='btn btn-xs btn-danger pull-right' style='margin-left:5px'>Delete Record</button> <button class='btn btn-xs btn-success pull-right'>Save Changes</button> "
	},   
	{
	"name": "Create filters and directives<br><small class='text-muted'><i>Budget: 15,000<i></small>",
	"est": "<td><div class='progress progress-sm'><div class='progress-bar progress-bar-warning progress-bar-striped' role='progressbar' aria-valuenow='100' aria-valuemin='0' aria-valuemax='100' style='width: 100%'></div></div></td>",
	"contacts": "<div class='project-members'><a href='javascript:void(0)'><img src='../../../images/avatar/3.jpg' class='online' alt='user'></a><a href='javascript:void(0)'><img src='../../../images/avatar/2.jpg' class='online'></a> </div> ",
	"status": "<span class='badge badge-success'>Active</span>",
	"tracker": "<button type='button' class='btn btn-sm btn-toggle btn-info' data-toggle='button' aria-pressed='true'><span class='handle'></span></button>",
	"starts": "01-6-2017",
	"ends": "<strong>11-09-2018</strong>",
	"comments": "This is a blank comments area, used to add comments and keep notes",
	"action": "<button class='btn btn-xs'>Open case</button> <button class='btn btn-xs btn-danger pull-right' style='margin-left:5px'>Delete Record</button> <button class='btn btn-xs btn-success pull-right'>Save Changes</button> "
	},   
	{
	"name": "Publish to Wrapbootstrap<br><small class='text-muted'><i>Budget: 4,000<i></small>",
	"est": "<td><div class='progress progress-sm'><div class='progress-bar progress-bar-info progress-bar-striped' role='progressbar' aria-valuenow='95' aria-valuemin='0' aria-valuemax='100' style='width: 95%'></div></div></td>",
	"contacts": "<div class='project-members'><a href='javascript:void(0)'><img src='../../../images/avatar/5.jpg' class='online' alt='user'></a><a href='javascript:void(0)'><img src='../../../images/avatar/1.jpg' class='online'></a> </div> ",
	"status": "<span class='badge badge-success'>Active</span>",
	"tracker": "<button type='button' class='btn btn-sm btn-toggle btn-info' data-toggle='button' aria-pressed='true'><span class='handle'></span></button>",
	"starts": "01-8-2017",
	"ends": "<strong>07-07-2018</strong>",
	"comments": "This is a blank comments area, used to add comments and keep notes",
	"action": "<button class='btn btn-xs'>Open case</button> <button class='btn btn-xs btn-danger pull-right' style='margin-left:5px'>Delete Record</button> <button class='btn btn-xs btn-success pull-right'>Save Changes</button> "
	}     
    ]
    };
	
  }); // End of use strict