<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>{{Auth::user()->name}}</title>

    <style>
      .clearfix:after {
  content: "";
  display: table;
  clear: both;
}

a {
  color: #5D6975;
  text-decoration: underline;
}

body {
  position: relative;
  margin: 0 auto; 
  color: #001028;
  background: #FFFFFF; 
  font-family: Arial, sans-serif; 
  font-size: 12px; 
  font-family: Arial;
}

header {
  padding: 10px 0;
  margin-bottom: 30px;
}

#logo {
  text-align: center;
  margin-bottom: 10px;
}

#logo img {
  border: 2px solid #848484;
  border-radius: 5px;
  width: 150px;
}

h1 {
  border-top: 1px solid  #5D6975;
  border-bottom: 1px solid  #5D6975;
  color: #5D6975;
  font-size: 2.4em;
  line-height: 1.4em;
  font-weight: normal;
  text-align: center;
  margin: 0 0 20px 0;
  background-image: url("{{asset("dimension.png")}}");
}

#project {
  float: left;
}

#project span {
  color: #5D6975;
  text-align: right;
  width: 52px;
  margin-right: 10px;
  display: inline-block;
  font-size: 0.8em;
}

#company {
  float: right;
  text-align: right;
}

#project div,
#company div {
  white-space: nowrap;        
}

table {
  width: 100%;
  border-collapse: collapse;
  border-spacing: 0;
  margin-bottom: 20px;
}

table tr:nth-child(2n-1) td {
  background: #F5F5F5;
}

table th,
table td {
  text-align: center;
}

table th {
  padding: 5px 20px;
  color: #5D6975;
  border-bottom: 1px solid #C1CED9;
  white-space: nowrap;        
  font-weight: normal;
}

table .service,
table .desc {
  text-align: left;
}

table td {
  padding: 20px;
  text-align: right;
}

table td.service,
table td.desc {
  vertical-align: top;
}

table td.unit,
table td.qty,
table td.total {
  font-size: 1.2em;
}

table td.grand {
  border-top: 1px solid #5D6975;;
}

#notices .notice {
  color: #5D6975;
  font-size: 1.2em;
}

footer {
  color: #5D6975;
  width: 100%;
  height: 30px;
  position: absolute;
  bottom: 0;
  border-top: 1px solid #C1CED9;
  padding: 8px 0;
  text-align: center;
}

#img
{
  width: 100px;
}

</style>

  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="">
      </div>
      <h1>Test#: {{$canti}}</h1>
      <div id="company" class="clearfix">
        <div>MCC: Zureil Dathan Mora Felix</div>
        <div>Osuna Zazueta Eddie Isac</div>
        <div>Ramirez Salzar Luis Fernando</div>
        <div>Sandoval Alfaro Oscar Eliut</div>
        <div><a href="mailto:testvocacionalIA@gmail.com">testvocacionalIA@gmail.com</a></div>
      </div>
      <div id="project">
      
        <div><span>NOMBRE</span>{{Auth::user()->name}}</div>
        <div><span>EMAIL</span> {{Auth::user()->email}}<a href="mailto:{{Auth::user()->email}}"></a></div>
        <div><span>CELULAR</span>{{Auth::user()->tel}}</div>
     
      </div>
    </header> <br> <br> <br> <br>
      <table>
        <thead>
          <tr>
            <th class="service">Nombre</th>
            <th class="desc"> Imagen</th>
            <th>CALIFICACION</th>
            <th>C. LABORAL</th>
            <th>UNIVERSIDADES</th>
          </tr>
        </thead>
        <tbody>
        @foreach($areas as $a)
          <tr>
            <td class="service">{{$a->nombre}}</td>
            <td class="desc"><img id="img" src="{{asset("images/areas")}}/{{$a->imagen}}" alt=""></td>
            <td class="unit">{{$a->calificacion}}%</td>
            <td class="qty">{{$a->laboral}}</td>
            <td class="total">{{$a->escuelas}}</td>
          </tr>
        @endforeach
        </tbody>
      </table>
    <footer>
      Gracias por realizar este TEST ¡Usted ha tomado una excelente decision!.
    </footer>
  </body>
</html>