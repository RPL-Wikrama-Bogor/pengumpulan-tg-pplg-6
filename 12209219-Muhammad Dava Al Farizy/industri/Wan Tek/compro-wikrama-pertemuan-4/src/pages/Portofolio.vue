<template>
<div class="container">
    <div class="portofolio">
        <div class="category">
            <span>Web</span>
            <span>Desain</span>
            <span>Mobile</span>
        </div>
        <div class="row-portofolio">

        </div>
    </div>
</div>
</template>

<style>
.category{
    margin: 10px 0px 35px 0;
    display: flex;
    flex-wrap: wrap;
}
.category span{
    background-color: #bdcdff;
    padding: 10px 15px;
    font-weight: 500;
    border-radius: 20px;
    margin: 5px;
    cursor: pointer;
}
.row-portofolio{
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 10px;
}
.portofolio{
    margin-top: 10px;
}
.portofolio h3{
    margin-top: 10px;
    font-weight: 900;
    font-size: 10px;
    line-height: 15px;
    margin-bottom: 0;
    color: #042181;
}
.portofolio p {
    font-weight: 900;
    font-size: 14px;
    line-height: 20px;
    color: #4f556a;
    max-width: 680px;
    margin: auto;
    margin-top: 14px;
    margin-bottom: 25px;
    text-align: center;
}

.portofolio span{
    color: gray;
}
@media screeen and(max-width: 680px){

    .row-portofolio{
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        grid-gap: 10px;
    }
    .portofolio h3{
        font-size:  20px;
    }
}

</style>