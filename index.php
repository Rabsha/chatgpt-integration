<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Care Plan Report</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="wrapper">
    <div class="formwork">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="myforms">
                        <h1>Personal Care Plan</h1>
                        <form action="processing.php" method="post">
                            <div class="form-group">
                                <label>Client Name</label>
                                <input type="text" name="detail1" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Ages</label>
                                <input type="text" name="detail2" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>About Me</label>
                                <textarea name="detail3" id="detail3" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label>What are the Client's Desired Goals and Outcomes?</label>
                                <textarea name="detail4" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Does the Client have Cognitive Impairment?</label>
                                <textarea name="detail5" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label>What are the Client's Personal Care Needs?</label>
                                <textarea name="detail6" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Does the Client have Continence Care Needs ?</label>
                                <textarea name="detail7" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label>What are the Client's Mobility Care Needs ?</label>
                                <textarea name="detail8" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label>What are the Client's Meal Requirements ?</label>
                                <textarea name="detail9" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label>What are the Client's Medication Support Requirements ?</label>
                                <textarea name="detail10" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Client Advance Support Requirements ?</label>
                                <textarea name="detail11" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <center>
                                    <button class="btn btn-success" type="submit">Submit</button>
                                </center>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
            </div>
        </div>
    </div>
</div>
<script>

</script>
</body>
</html>