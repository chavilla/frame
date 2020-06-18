<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
        integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <h1 class="text-center">Formulario</h1>

    <div class="container">
        <form action="" id="frm" class="frm container">
            <div class="lbl"><label for="first-name" class="ml-3">Name*</label></div>
            <div class="d-flex justify-content-center">
                <input type="text" id="name" name="name" class="w-50 mr-1 pl-2 campo" placeholder="First name">
                <input type="text" id="lastName" name="lastName" class="w-50 ml-1 pl-2 campo" placeholder="Last name">
            </div>
            <div class="lbl"><label for="email" class="ml-3 mt-2">Email *</label></div>
            <div class="d-flex justify-content-center">
                <input type="text" name="email" id="email" class="w-100 pl-2 campo" placeholder="Your email">
            </div>
            <div class="lbl"><label for="phone" class="ml-3 mt-2">Phone *</label></div>
            <div class="d-flex justify-content-center">
                <input type="text" name="phone" id="phone" class="w-100 pl-2 campo" placeholder="Phone">
            </div>
            <div class="lbl"><label for="street" class="ml-3 mt-2">Address of place the be cleaning *</label></div>
            <div class="d-flex justify-content-center direcciones">
                <input type="text" id="street" name="street" class="w-50 mr-1 pl-2 campo" placeholder="Street Address">
                <input type="text" id="address" name="address" class="w-50 ml-1 pl-2 campo"
                    placeholder="Address Line 2">
            </div>
            <div class="d-flex justify-content-center mt-1 direcciones">
                <input type="text" id="city" name="city" class="w-50 mr-1  campo" placeholder="City">
                <input type="text" id="code" name="code" class="w-50 ml-1  campo" placeholder="Postal/Zip Code">
            </div>
            <div class="lbl"><label for="service" class="ml-3 mt-2">Select type cleaning service *</label>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input type="radio" class="" id="standar" value="standard">
                    <label class="" for="defaultInline1">Standard Clean</label>
                </div>

                <!-- Default inline 2-->
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input type="radio" class="" id="desinfection" value="desinfection"/>
                    <label class="" for="defaultInline2">Disinfection Services</label>
                </div>
            </div>

            <div id="standard">
                <div class="lbl"><label for="hours" class="ml-3 mt-2">How many hours per clean? *</label></div>
                <div class="d-flex justify-content-center mt-2">
                    <select name="hours" class="w-100 campo" id="hours">
                        <option value="">Select item</option>
                        <option value="3">3 hours</option>
                        <option value="4">4 hours</option>
                        <option value="more-4">More than 4 hours per clean</option>
                        <option value="dont-know">Don't know</option>
                    </select>
                </div>
                <div class="lbl"><label for="often" class="ml-3 mt-2">How often? *</label></div>
                <div class="d-flex justify-content-center mt-2">
                    <select name="often" class="w-100 campo" id="often">
                        <option value="">Select item</option>
                        <option value="weekly">Weekly</option>
                        <option value="bi-weekly">Bi-weekly</option>
                        <option value="more-once">More than once a week</option>
                    </select>
                </div>
                <div class="lnl"><label for="bedrooms" class="ml-3 mt-2">How many bedrooms do you have? *</label></div>
                <div class="d-flex justify-content-center mt-2">
                    <select name="bedrooms" class="w-100 campo" id="bedrooms">
                        <option value="">Select item</option>
                        <option value="1">1</option>
                        <option value=2>2</option>
                        <option value=3>3</option>
                        <option value=4>4</option>
                        <option value=5>5</option>
                        <option value="more">More than 5 bedrooms</option>
                    </select>
                </div>
                <div class="lnl"><label for="bedrooms" class="ml-3 mt-2">How many bathrooms do you have? *</label></div>
                <div class="d-flex justify-content-center mt-2">
                    <select name="bathrooms" class="w-100 campo" id="bathrooms">
                        <option value="">Select item</option>
                        <option value="1">1</option>
                        <option value=2>2</option>
                        <option value=3>3</option>
                        <option value=4>4</option>
                        <option value=5>5</option>
                        <option value="more">More than 5 bathrooms</option>
                    </select>
                </div>
                <div><label for="extras" class="ml-3 mt-2">Need any extras?</label></div>
                <div class="d-flex justify-content-center mt-2">
                    <select name="extras" class="w-100 campo" id="extras">
                        <option value="">Select item</option>
                        <option value="window">Clean Windows</option>
                        <option value="oven">Clean Oven</option>
                        <option value="oven2">Clean Doble Oven</option>
                        <option value="couch2">Clean Armchair 2 bodies</option>
                        <option value="couch3">Clean Armchair 3 bodies</option>
                        <option value="carpet">Clean Carpet</option>
                        </ul>
                    </select>
                </div>
                <div class="lbl"><label for="days" class="ml-3 mt-2">What is your preferred day? *</label></div>
                <div class="d-flex justify-content-center mt-2">
                    <select name="preferedDay" class="w-100 campo" id="preferedDay">
                        <option value="">Select item</option>
                        <option value="monday">Monday</option>
                        <option value="tuesday">Tuesday</option>
                        <option value="wednesday">Wednesday</option>
                        <option value="thursday">Thursday</option>
                        <option value="friday">Friday</option>
                        <option value="available">I need a one time clean (subject to company availability)</option>
                        <option value="no-matter">Doesn't matter</option>
                    </select>
                </div>
                <div class="lbl"><label for="days" class="ml-3 mt-2">What is your preferred time? *</label></div>
                <div class="d-flex justify-content-center mt-2">
                    <select name="preferedTime" class="w-100 campo" id="preferedTime">
                        <option value="">Select item</option>
                        <option value="morning">Morning</option>
                        <option value="luch">At lunch</option>
                        <option value="afternoon">Afternoon</option>
                        <option value="no-matter">Doesn't matter</option>
                    </select>
                </div>
                <div class="lbl"><label for="comments" class="ml-3 mt-2">Tasks and comments
                    </label></div>
                <div class="d-flex justify-content-center mt-2">
                    <textarea name="comments" id="comments" cols="30" rows="10" class="pl-3 w-100 campo"
                        placeholder="Paragraph"></textarea>
                </div>
                <div class="lbl">
                    <label for="comments" class="ml-3 mt-2">Detail the areas to be disinfected</label>
                </div>
                <div class="d-flex justify-content-center mt-2">
                    <textarea name="details" id="details" cols="30" rows="10" class="pl-3 w-100 campo"
                        placeholder="Paragraph"></textarea>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="mt-3 bg-dark text-white py-1 px-4 btn-submit">Submit</button>
                </div>
            </div>
        </form>
    </div>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    <script src="script.js" type="module"></script>
</body>

</html>