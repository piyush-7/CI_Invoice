<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Invoice</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

  
  <link rel="stylesheet" href="<?php echo base_url('vendor/css/style.css') ?>">

</head>

<body>
  <!-- <div class="container text-center">
        <div class="row align-items-start p-5">
          <div class="col bg-secondary img-sr ">
           <h2>Add Your Logo</h2>
            <img src="..." class="rounded" alt="...">
            
          </div>
          <div class="col">
            <h1>Invoice</h1>
          </div> -->

  <div class="my-5 page" size="A4" id="print-invoice">
    <div class="p-5">
      <section class="top-content bb d-flex justify-content-between">
        <div class="">
          <!-- <img src="logo.png" alt="" class="img-fluid"> -->
          
          <input type="file" id="image-input" accept="image/jpeg, image/png, image/jpg" style="display:none; visibility:none;">

          <div id="display-image"><label for="image-input"><i class="fa fa-plus sign d-md-block d-sm-none" aria-hidden="true" ></i></label></div>
        </div>

        <div class="top-left">
          <div class="graphic-path">
            <h1>INVOICE</h1>
          </div>
          <div class="p-2 mt-3">
            <input type="text" name="text" value="#1">
          </div>
        </div>
      </section>
      <div class="invoice-text">
        <input type="text" name="text" value="" class="p-3" placeholder="Who is this Invoice From"
          style="width: 230px;">
      </div>
      <div class="date-field mb-2">
        Date&nbsp; <input type="date" name="date" id="">

      </div>
      <div class="payment-terms mb-1">
        Payment Terms &nbsp; <input type="text" name="" id="">
      </div>

      <div class="date-field mb-2">
        Due date &nbsp; <input type="date" name="date" id="">
      </div>
      <div class="date-field mb-2">
        PO Number &nbsp; <input type="text" name="date" id="">
      </div>

      <div class="bill-to">
        <label for="">Bill To &nbsp;</label>
        <input type="text" name="" class="p-3" placeholder="Who is this invoice to">
        <input type="text" class="ml-2 p-3" placeholder="Optional *">
      </div>

      <!-- <div class="container text-center bg-dark text-white mt-3 p-2 item">
        <div class="row align-items-start">
          <div class="col ">
            item
          </div>
          <div class="col">
            Quantity
          </div>
          <div class="col">
            Rate
          </div>
          <div class="col">
            Amount
          </div>
        </div>
      </div>

      <div class="container ">
        <div class="row ">
          <div class="col-lg-6  border  ">
            <input type="text" class="" name="" value="" placeholder="">
          </div>
          <div class="col-lg-2 ">
            <input type="text" class="" name="" value="" placeholder="Quantity">
          </div>
          <div class="col-lg-2 ">
            <input type="text" class="" name="" value="$" placeholder="">
          </div>
          <div class="col-lg-2 ">
            <input type="text" class="" name="" value="$0.00">
          </div>
        </div>
      </div> -->

      <table class="inventory">
        <thead>
          <tr>
            <th><span contenteditable>Item</span></th>
            <th><span contenteditable>Description</span></th>
            <th><span contenteditable>Rate</span></th>
            <th><span contenteditable>Quantity</span></th>
            <th><span contenteditable>Price</span></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><a class="cut">-</a><span contenteditable>Front End Consultation</span></td>
            <td><span contenteditable>Experience Review</span></td>
            <td><span data-prefix>$</span><span contenteditable>150.00</span></td>
            <td><span contenteditable>4</span></td>
            <td><span data-prefix>$</span><span>600.00</span></td>
          </tr>
        </tbody>
      </table>

      <div>
        <h6 class="notes-h6">Notes</h6>
        <input type="text" name="" value="" placeholder="Notes Any relevant Information" class="p-4 notes"
          style="">

        <span style="margin-left:80px;">Subtotal</span><input type="text" value="0.00" style="margin-left:10px ;">

        <span style="margin-left:470px;">Tax</span><input type="text" value="0.00" style="margin-left:10px ;">

        <span style="margin-left:460px;">Total</span><input type="text" value="0.00"
          style="margin-left:10px ; margin-top: 20px;">

        <span style="margin-left:400px;">Amount Paid</span><input type="text" value="$0.00"
          style="margin-left:10px ; margin-top: 20px;">

        <span style="margin-left:400px;">Balance Due</span><input type="text" value="$0.00"
          style="margin-left:10px ; margin-top: 20px;">


        <h6>Terms</h6>
        <input type="text" name="" value="" style="height:70px; width: 520px;"
          placeholder="Terms & Condition - Late Fees,Payment Methods,Delivery Schedule">

        <!-- <textarea class="Terms" style="height:100px ;" placeholder="Terms & Condition - Late Fees,Payment Methods,Delivery Schedule" >
            
          </textarea> -->

      </div>
      <button onclick="window.print()" style="margin-top: 30px;" class="btn btn-success">Print</button>

    </div>
    <div>


    </div>

  </div>
  </div>
  </div>

  <script src="<?php echo base_url('vendor/js/script.js') ?>"></script>
</body>
<!-- JavaScript Bundle with Popper -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

  
</html>