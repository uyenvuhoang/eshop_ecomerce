<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Commpare Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>

<body>
    <style>
        .tuan-header {
            width: 1000px;
            margin: 0 auto;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
        }

        .back-button {
            text-decoration: none;
            border: solid 1px;
            padding: 10px 10px;
            border-radius: 15px;
            color: rgb(0, 67, 224);
        }



        /*  */
        .tuan-big-container {
            width: 1300px;
            display: flex;
            justify-content: center;
            margin: 0 auto;
        }

        .tuan-side-bar {
            width: 200px;
            display: flex;
            flex-direction: column;
        }

        .tuan-side-bar-content {
            width: 100%;
            height: 80px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-bottom: 1px solid;
        }

        .content-top {
            height: 280px;
        }

        .content-bottom {
            height: 120px;
        }


        /*  */
        .tuan-compare-list-item {
            width: 300px;
            display: flex;
            flex-direction: column;
            margin: 0px 10px;
            padding: 0px 5px;
            border: solid 1px;
            border-radius: 20px;
            background: rgb(255, 229, 182);
            position: relative;
        }

        .tuan-compare-item {
            height: 80px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .item-top {
            height: 280px;
        }

        .item-bottom {
            height: 120px;
        }

        .tuan-delete-compare {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 20px;
            color: red;
        }
    </style>
    <div class="tuan-header">
        <h2 style="color: rgb(0, 67, 224)">Compare Product List</h2>
        <a class="back-button" href="{{ url('compareReturn') }}">BACK</a>
    </div>

    <div class="tuan-big-container">
        <div class="tuan-side-bar">
            <div class="tuan-side-bar-content content-top">
                <h2>Product Image</h2>
            </div>
            <div style="color: darkslateblue;" class="tuan-side-bar-content">
                <h2>Product Name</h2>
            </div>
            <div style="color: coral;" class="tuan-side-bar-content">
                <h3>Product Brand</h3>
            </div>
            <div style="color: red;" class="tuan-side-bar-content">
                <h3>Product Price</h3>
            </div>
            <div class="tuan-side-bar-content content-bottom">
                <h3>Product Descrip</h3>
            </div>
        </div>

        @if ($takeCompareList->count() != 0)
        @foreach ($takeCompareList as $item)
        <div class="tuan-compare-list-item">
            <div class="tuan-compare-item item-top">
                <img style="border-top-left-radius: 20px; border-top-right-radius: 20px;" src="{{ $item->compare_item_image }}" alt="" width="300px" height="280px">
            </div>
            <div style="color: darkslateblue; text-overflow: ellipsis; overflow: hidden; white-space: nowrap;" class="tuan-compare-item">
                <h2>{{ $item->compare_item_name }}</h2>
            </div>
            <div style="color: coral;" class="tuan-compare-item">
                <h3>{{ $item->compare_item_brand }}</h3>
            </div>
            <div style="color: red;" class="tuan-compare-item">
                <h3>{{ $item->compare_item_price }}</h3>
            </div>
            <div class="tuan-compare-item item-bottom">{{ $item->compare_item_description }}</div>
            <a class="tuan-delete-compare" href="{{ url('/deleteCompare', [$item->compare_item_id]) }}"><i class="fa-solid fa-trash-can"></i></a>
        </div>
        @endforeach
        @else
        <div style="width: 500px;display: flex; align-items: center; justify-content: center;">
            <h2>Compare List is Empty!!!</h2>
        </div>
        @endif


    </div>


</body>

</html>