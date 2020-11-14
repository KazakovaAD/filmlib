function validateFilm()
{
    var name=document.getElementById("filmName").value;
    var director=document.getElementById("filmDirector").value;
    var duration=document.getElementById("filmDuration").value;
    var date=document.getElementById("filmDate").value;
    var description=document.getElementById("filmDescription").value;
    valid = true;

    if (isFinite(name))
    {
        filmName.classList.add('is-invalid');
        document.getElementById("nameError").innerHTML="Введите строку";
        valid = false;
    }
    else
    {
        filmName.classList.remove('is-invalid');
        document.getElementById("nameError").innerHTML="";
    }

    if (isFinite(director))
    {
        filmDirector.classList.add('is-invalid');
        document.getElementById("directorError").innerHTML="Введите строку";
        valid = false;
    }
    else
    {
        filmDirector.classList.remove('is-invalid');
        document.getElementById("directorError").innerHTML="";
    }
    if (!isFinite(duration))
    {
        filmDuration.classList.add('is-invalid');
        document.getElementById("durationError").innerHTML="Введите число";
        valid = false;
    }
    else
    {
        filmDuration.classList.remove('is-invalid');
        document.getElementById("durationError").innerHTML="";
    }
    var reg = /\d{4}(-)\d{2}(-)\d{2}/;
    var foundDate = date.match(reg);
    if (foundDate == null)
    {
        filmDate.classList.add('is-invalid');
        document.getElementById("dateError").innerHTML="Введите дату в формате гггг-мм-дд";
        valid = false;
    }
    else
    {
        filmDate.classList.remove('is-invalid');
        document.getElementById("dateError").innerHTML="";
    }
    return valid;
}