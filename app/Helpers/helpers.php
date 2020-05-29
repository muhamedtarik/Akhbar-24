<?php

function arabicDate($date)
{
    return \Carbon\Carbon::parse($date)->locale('ar_AR')->isoFormat('dddd Do MMM YYYY');
}
