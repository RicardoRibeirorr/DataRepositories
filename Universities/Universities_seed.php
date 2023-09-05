<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\School;

class SchoolsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            School::create(array(
             "name"=>"Academia da Força Aérea",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.emfa.pt/afa",
             "email"=>"afa.gabcmd@emfa.pt",
             "domain"=>"@emfa.pt",
             "phone"=>219678956
            ));
            School::create(array(
             "name"=>"Academia da Força Aérea - unidade orgânica de ensino politécnico",
             "dependent_institute_id"=>"pt_7500",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.emfa.pt",
             "email"=>"afa.secdep@emfa.pt",
             "domain"=>"@emfa.pt",
             "phone"=>219678960
            ));
            School::create(array(
             "name"=>"Academia Militar",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.academiamilitar.pt",
             "email"=>"am.siirpac@mail.exercito.pt",
             "domain"=>"@mail.exercito.pt",
             "phone"=>213186900
            ));
            School::create(array(
             "name"=>"Academia Militar - unidade orgânica de ensino politécnico",
             "dependent_institute_id"=>"pt_7510",
             "district"=>"Lisboa",
             "country"=>"pt",
             "website"=>"https://www.ium.pt/",
             "email"=>"geral@ium.pt",
             "domain"=>"@ium.pt",
             "skip_email_validation"=>true,
             "phone"=>214988900
            ));
            School::create(array(
             "name"=>"Academia Nacional Superior de Orquestra",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.oml.pt",
             "email"=>"oml@oml.pt",
             "domain"=>"@oml.pt",
             "phone"=>213617320
            ));
            School::create(array(
             "name"=>"Conservatório Superior de Música de Gaia",
             "district"=>"Porto",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.conservatoriodegaia.org",
             "email"=>"fundacao.crg@netc.pt",
             "domain"=>"@netc.pt",
             "phone"=>223712213
            ));
            School::create(array(
             "name"=>"Escola do Serviço de Saúde Militar",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "email"=>"director@netcabo.pt",
             "domain"=>"@netcabo.pt",
             "phone"=>"213871514, 213871608"
            ));
            School::create(array(
             "name"=>"Escola Naval",
             "district"=>"Setúbal",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.marinha.pt/escolanaval",
             "email"=>"comando@escolanaval.pt",
             "domain"=>"@escolanaval.pt",
             "phone"=>210901900
            ));
            School::create(array(
             "name"=>"Escola Naval - unidade orgânica de ensino politécnico",
             "dependent_institute_id"=>"pt_7520",
             "district"=>"Setúbal",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.marinha.pt/escolanaval",
             "email"=>"comando@escolanaval.pt",
             "domain"=>"@escolanaval.pt",
             "phone"=>210901900
            ));
            School::create(array(
             "name"=>"Escola Superior Artística do Porto",
             "district"=>"Porto",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.esap.pt",
             "email"=>"secretaria@esap.pt",
             "domain"=>"@esap.pt",
             "phone"=>223392130
            ));
            School::create(array(
             "name"=>"Escola Superior Artística do Porto (Guimarães)",
             "district"=>"Braga",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.esap-gmr.com",
             "email"=>"dir@esap-gmr.com",
             "domain"=>"@esap-gmr.com",
             "phone"=>253410235
            ));
            School::create(array(
             "name"=>"Escola Superior de Actividades Imobiliárias",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.esai.pt",
             "email"=>"esai@esai.pt",
             "domain"=>"@esai.pt",
             "phone"=>218367010
            ));
            School::create(array(
             "name"=>"Escola Superior de Artes Decorativas",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.fress.pt",
             "email"=>"esad.geral@fress.pt",
             "domain"=>"@fress.pt",
             "phone"=>"218814653, 218814696"
            ));
            School::create(array(
             "name"=>"Escola Superior de Artes e Design",
             "district"=>"Porto",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.esad.pt",
             "email"=>"info@esad.pt",
             "domain"=>"@esad.pt",
             "phone"=>229578750
            ));
            School::create(array(
             "name"=>"Escola Superior de Design",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.iade.pt",
             "email"=>"info@iade.pt",
             "domain"=>"@iade.pt",
             "phone"=>213939600
            ));
            School::create(array(
             "name"=>"Escola Superior de Educação de Almeida Garrett",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.eseag.pt",
             "email"=>"informacoes@isht.pt",
             "domain"=>"@isht.pt",
             "phone"=>218862042
            ));
            School::create(array(
             "name"=>"Escola Superior de Educação de Fafe",
             "district"=>"Braga",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.iesfafe.pt",
             "email"=>"iesfafe@iname.com",
             "domain"=>"@iname.com",
             "phone"=>253509000
            ));
            School::create(array(
             "name"=>"Escola Superior de Educação de João de Deus",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://jdeus.esoterica.pt",
             "email"=>"jdeus@esoterica.pt",
             "domain"=>"@esoterica.pt",
             "phone"=>213968154
            ));
            School::create(array(
             "name"=>"Escola Superior de Educação de Paula Frassinetti",
             "district"=>"Porto",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.esefrassinetti.pt",
             "email"=>"secretaria@esefrassinetti.pt",
             "domain"=>"@esefrassinetti.pt",
             "phone"=>225573420
            ));
            School::create(array(
             "name"=>"Escola Superior de Educação de Santa Maria",
             "dependent_institute_id"=>"pt_4440",
             "district"=>"Porto",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.esenfsm.pt",
             "email"=>"esesm@asm.mail.pt",
             "domain"=>"@asm.mail.pt",
             "phone"=>"223745730, 223745733"
            ));
            School::create(array(
             "name"=>"Escola Superior de Educação de Torres Novas",
             "district"=>"Santarém",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.esetn.pt",
             "email"=>"esetn@mail.telepac.pt",
             "domain"=>"@mail.telepac.pt",
             "phone"=>249824892
            ));
            School::create(array(
             "name"=>"Escola Superior de Educação Jean Piaget - Nordeste",
             "district"=>"Bragança",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ipiaget.org",
             "email"=>"ese.macedo@macedo.ipiaget.org",
             "domain"=>"@macedo.ipiaget.org",
             "phone"=>278420040
            ));
            School::create(array(
             "name"=>"Escola Superior de Educação Jean Piaget de Almada",
             "district"=>"Setúbal",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ipiaget.org",
             "email"=>"ese.almada@almada.ipiaget.org",
             "domain"=>"@almada.ipiaget.org",
             "phone"=>212946250
            ));
            School::create(array(
             "name"=>"Escola Superior de Educação Jean Piaget de Arcozelo",
             "district"=>"Porto",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ipiaget.org",
             "email"=>"info@gaia.ipiaget.org",
             "domain"=>"@gaia.ipiaget.org",
             "phone"=>227537600
            ));
            School::create(array(
             "name"=>"Escola Superior de Educação Jean Piaget de Arcozelo (Viseu)",
             "district"=>"Viseu",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ipiaget.org",
             "email"=>"ese.viseu@viseu.ipiaget.org",
             "domain"=>"@viseu.ipiaget.org",
             "phone"=>232910000
            ));
            School::create(array(
             "name"=>"Escola Superior de Educadores de Infância Maria Ulrich",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.eseimu.pt",
             "email"=>"esei.mu.@mail.telepac.pt",
             "domain"=>"@mail.telepac.pt",
             "phone"=>213929560
            ));
            School::create(array(
             "name"=>"Escola Superior de Enfermagem da Cruz Vermelha Portuguesa de Oliveira de Azeméis",
             "district"=>"Aveiro",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "email"=>"secretaria@esecvpoa.com",
             "domain"=>"@esecvpoa.com",
             "phone"=>256661430
            ));
            School::create(array(
             "name"=>"Escola Superior de Enfermagem de Coimbra",
             "district"=>"Coimbra",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.esenfc.pt",
             "email"=>"esenfc@esenfc.pt",
             "domain"=>"@esenfc.pt",
             "phone"=>"239487200, 239802850"
            ));
            School::create(array(
             "name"=>"Escola Superior de Enfermagem de Lisboa",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.esel.pt",
             "email"=>"gera@esel.pt",
             "domain"=>"@esel.pt",
             "phone"=>217924100
            ));
            School::create(array(
             "name"=>"Escola Superior de Enfermagem de S. José de Cluny",
             "district"=>"R. A. Madeira",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.esesjcluny.pt",
             "email"=>"ese.jose.cluny@clix.pt",
             "domain"=>"@clix.pt",
             "phone"=>"291743444, 291743445"
            ));
            School::create(array(
             "name"=>"Escola Superior de Enfermagem de Santa Maria",
             "district"=>"Porto",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.esenfsm.pt",
             "email"=>"esenfsm@oninet.pt",
             "domain"=>"@oninet.pt",
             "phone"=>"225098664, 225098665"
            ));
            School::create(array(
             "name"=>"Escola Superior de Enfermagem do Porto",
             "district"=>"Porto",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://portal.esenf.pt",
             "email"=>"esep@esenf.pt",
             "domain"=>"@esenf.pt",
             "phone"=>225073500
            ));
            School::create(array(
             "name"=>"Escola Superior de Enfermagem Dr. José Timóteo Montalvão Machado",
             "district"=>"Vila Real",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "email"=>"esedjtmm@mail.telepac.pt",
             "domain"=>"@mail.telepac.pt",
             "phone"=>276301690
            ));
            School::create(array(
             "name"=>"Escola Superior de Enfermagem S. Francisco das Misericórdias",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.esesfm.pt",
             "email"=>"esesfm@esesfm.pt",
             "domain"=>"@esesfm.pt",
             "phone"=>"217120913, 217120924"
            ));
            School::create(array(
             "name"=>"Escola Superior de Hotelaria e Turismo do Estoril",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.eshte.pt",
             "email"=>"secretaria@eshte.pt",
             "domain"=>"@eshte.pt",
             "phone"=>210040700
            ));
            School::create(array(
             "name"=>"Escola Superior de Marketing e Publicidade",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.iade.pt",
             "email"=>"info@iade.pt",
             "domain"=>"@iade.pt",
             "phone"=>213939600
            ));
            School::create(array(
             "name"=>"Escola Superior de Saúde Atlântica",
             "dependent_institute_id"=>"pt_2700",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.uatla.pt",
             "email"=>"informar@uatla.pt",
             "domain"=>"@uatla.pt",
             "phone"=>214398200
            ));
            School::create(array(
             "name"=>"Escola Superior de Saúde da Cruz Vermelha Portuguesa",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.cruzvermelha.pt",
             "email"=>"secretaria@esscvp.com",
             "domain"=>"@esscvp.com",
             "phone"=>213616790
            ));
            School::create(array(
             "name"=>"Escola Superior de Saúde do Alcoitão",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.essa.pt",
             "email"=>"giessa@mail.telepac.pt",
             "domain"=>"@mail.telepac.pt",
             "phone"=>214607450
            ));
            School::create(array(
             "name"=>"Escola Superior de Saúde Egas Moniz",
             "district"=>"Setúbal",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.egasmoniz.ed.pt/essem.pt",
             "email"=>"essem@iscss.pt",
             "domain"=>"@iscss.pt",
             "phone"=>212946700
            ));
            School::create(array(
             "name"=>"Escola Superior de Saúde Jean Piaget - Algarve",
             "district"=>"Faro",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ipiaget.org",
             "email"=>"info.silves@silves.ipiaget.org",
             "domain"=>"@silves.ipiaget.org",
             "phone"=>282440170
            ));
            School::create(array(
             "name"=>"Escola Superior de Saúde Jean Piaget de Vila Nova de Gaia",
             "district"=>"Porto",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ipiaget.org",
             "email"=>"ess.gaia@gaia.ipiaget.org",
             "domain"=>"@gaia.ipiaget.org",
             "phone"=>227536636
            ));
            School::create(array(
             "name"=>"Escola Superior de Saúde Jean Piaget de Viseu",
             "district"=>"Viseu",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ipiaget.org",
             "email"=>"ess.viseu@viseu.ipiaget.org",
             "domain"=>"@viseu.ipiaget.org",
             "phone"=>232910000
            ));
            School::create(array(
             "name"=>"Escola Superior de Saúde Jean Piaget/Nordeste",
             "district"=>"Bragança",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ipiaget.org",
             "email"=>"ess.macedo@macedo.ipiaget.org",
             "domain"=>"@macedo.ipiaget.org",
             "phone"=>278420049
            ));
            School::create(array(
             "name"=>"Escola Superior de Saúde Ribeiro Sanches",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.u.lusofona.pt",
             "email"=>"informacoes@erisa.ulusofona.pt",
             "domain"=>"@erisa.ulusofona.pt",
             "phone"=>218621060
            ));
            School::create(array(
             "name"=>"Escola Superior de Tecnologias de Fafe",
             "district"=>"Braga",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.iesfafe.pt",
             "email"=>"iesfafe@iname.com",
             "domain"=>"@iname.com",
             "phone"=>253509000
            ));
            School::create(array(
             "name"=>"Escola Superior de Tecnologias e Artes de Lisboa",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.estal.pt",
             "email"=>"estal@estal.pt",
             "domain"=>"@estal.pt",
             "phone"=>213964086
            ));
            School::create(array(
             "name"=>"Escola Superior Gallaecia",
             "district"=>"Viana do Castelo",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.esg.pt",
             "email"=>"esc.sup.gallaecia@mail.telepac.pt",
             "domain"=>"@mail.telepac.pt",
             "phone"=>251794054
            ));
            School::create(array(
             "name"=>"Escola Superior Náutica Infante D. Henrique",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.enautica.pt",
             "email"=>"info@enautica.pt",
             "domain"=>"@enautica.pt",
             "phone"=>214460010
            ));
            School::create(array(
             "name"=>"Escola Universitária das Artes de Coimbra",
             "district"=>"Coimbra",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.arca.pt",
             "email"=>"info@arca.pt",
             "domain"=>"@arca.pt",
             "phone"=>239497400
            ));
            School::create(array(
             "name"=>"Escola Universitária Vasco da Gama",
             "district"=>"Coimbra",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.euvg.net",
             "email"=>"geral@euvg.net",
             "domain"=>"@euvg.net",
             "phone"=>239444444
            ));
            School::create(array(
             "name"=>"Instituto de Estudos Superiores Financeiros e Fiscais (Porto)",
             "district"=>"Porto",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.iesf.pt",
             "email"=>"info@iesf.pt",
             "domain"=>"@iesf.pt",
             "phone"=>227538800
            ));
            School::create(array(
             "name"=>"Instituto Politécnico da Guarda",
             "district"=>"Guarda",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ipg.pt",
             "email"=>"ipg@ipg.pt",
             "domain"=>"@ipg.pt",
             "phone"=>"271220111, 271222634"
            ));
            School::create(array(
             "name"=>"Instituto Politécnico da Guarda - Escola Superior de Educação, Comunicação e Desporto da Guarda",
             "dependent_institute_id"=>"pt_3090",
             "district"=>"Guarda",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ipg.pt/ese",
             "email"=>"director.ese@ipg.pt",
             "domain"=>"@ipg.pt",
             "phone"=>"271220118, 271220135"
            ));
            School::create(array(
             "name"=>"Instituto Politécnico da Guarda - Escola Superior de Saúde da Guarda",
             "dependent_institute_id"=>"pt_3090",
             "district"=>"Guarda",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.essg.ipg.pt",
             "email"=>"s.academicos@ipg.pt",
             "domain"=>"@ipg.pt",
             "phone"=>271205220
            ));
            School::create(array(
             "name"=>"Instituto Politécnico da Guarda - Escola Superior de Tecnologia e Gestão da Guarda",
             "dependent_institute_id"=>"pt_3090",
             "district"=>"Guarda",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ipg.pt/estg",
             "email"=>"estg@ipg.pt",
             "domain"=>"@ipg.pt",
             "phone"=>"271220120, 271220146"
            ));
            School::create(array(
             "name"=>"Instituto Politécnico da Guarda - Escola Superior de Turismo e Hotelaria de Seia",
             "dependent_institute_id"=>"pt_3090",
             "district"=>"Guarda",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ipg.pt/estt",
             "email"=>"esttseia@ipg.pt",
             "domain"=>"@ipg.pt",
             "phone"=>238320800
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Beja",
             "district"=>"Beja",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ipbeja.pt",
             "email"=>"ipb@ipbeja.pt",
             "domain"=>"@ipbeja.pt",
             "phone"=>284314400
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Beja - Escola Superior Agrária de Beja",
             "dependent_institute_id"=>"pt_3020",
             "district"=>"Beja",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.esab.ipbeja.pt",
             "email"=>"esa@esab.ipbeja.pt",
             "domain"=>"@esab.ipbeja.pt",
             "phone"=>284314300
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Beja - Escola Superior de Educação de Beja",
             "dependent_institute_id"=>"pt_3020",
             "district"=>"Beja",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.eseb.ipbeja.pt",
             "email"=>"eseb@eseb.ipbeja.pt",
             "domain"=>"@eseb.ipbeja.pt",
             "phone"=>284315000
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Beja - Escola Superior de Saúde de Beja",
             "dependent_institute_id"=>"pt_3020",
             "district"=>"Beja",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.essb.ipbeja.pt",
             "email"=>"esenf@esenf.ipbeja.pt",
             "domain"=>"@esenf.ipbeja.pt",
             "phone"=>284313280
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Beja - Escola Superior de Tecnologia e Gestão de Beja",
             "dependent_institute_id"=>"pt_3020",
             "district"=>"Beja",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.estig.ipbeja.pt",
             "email"=>"estig@estig.ipbeja.pt",
             "domain"=>"@estig.ipbeja.pt",
             "phone"=>284311540
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Bragança",
             "district"=>"Bragança",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ipb.pt",
             "email"=>"ipb@ipb.pt",
             "domain"=>"@ipb.pt",
             "phone"=>273303000
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Bragança - Escola Superior Agrária de Bragança",
             "dependent_institute_id"=>"pt_3040",
             "district"=>"Bragança",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.esa.ipb.pt",
             "email"=>"geral-esa@ipb.pt",
             "domain"=>"@ipb.pt",
             "phone"=>273303200
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Bragança - Escola Superior de Comunicação, Administração e Turismo de Mirandela",
             "dependent_institute_id"=>"pt_3040",
             "district"=>"Bragança",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.estgm.ipb.pt",
             "email"=>"estgm@ipb.pt",
             "domain"=>"@ipb.pt",
             "phone"=>"278201340, 278201341"
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Bragança - Escola Superior de Educação de Bragança",
             "dependent_institute_id"=>"pt_3040",
             "district"=>"Bragança",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ese.ipb.pt",
             "email"=>"eseb@ipb.pt",
             "domain"=>"@ipb.pt",
             "phone"=>273303000
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Bragança - Escola Superior de Saúde de Bragança",
             "dependent_institute_id"=>"pt_3040",
             "district"=>"Bragança",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ipb.pt",
             "email"=>"essa@ipb.pt",
             "domain"=>"@ipb.pt",
             "phone"=>273331593
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Bragança - Escola Superior de Tecnologia e de Gestão de Bragança",
             "dependent_institute_id"=>"pt_3040",
             "district"=>"Bragança",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.estig.ipb.pt",
             "email"=>"estig@ipb.pt",
             "domain"=>"@ipb.pt",
             "phone"=>"273303000, 273303050"
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Castelo Branco",
             "district"=>"Castelo Branco",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ipcb.pt",
             "email"=>"ipcbsc@mail.ipcb.pt",
             "domain"=>"@mail.ipcb.pt",
             "phone"=>272339600
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Castelo Branco - Escola Superior Agrária de Castelo Branco",
             "dependent_institute_id"=>"pt_3050",
             "district"=>"Castelo Branco",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.esa.ipcb.pt",
             "email"=>"administra@esa.ipcb.pt",
             "domain"=>"@esa.ipcb.pt",
             "phone"=>272339900
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Castelo Branco - Escola Superior de Artes Aplicadas de Castelo Branco",
             "dependent_institute_id"=>"pt_3050",
             "district"=>"Castelo Branco",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.esart.ipcb.pt",
             "email"=>"info.esart@esart.ipcb.pt",
             "domain"=>"@esart.ipcb.pt",
             "phone"=>272340800
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Castelo Branco - Escola Superior de Educação de Castelo Branco",
             "dependent_institute_id"=>"pt_3050",
             "district"=>"Castelo Branco",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ese.ipcb.pt",
             "email"=>"esecb@ese.ipcb.pt",
             "domain"=>"@ese.ipcb.pt",
             "phone"=>272339100
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Castelo Branco - Escola Superior de Gestão de Idanha-a-Nova",
             "dependent_institute_id"=>"pt_3050",
             "district"=>"Castelo Branco",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.esg.ipcb.pt",
             "email"=>"esg.info@mail.esg.ipcb.pt",
             "domain"=>"@mail.esg.ipcb.pt",
             "phone"=>277200220
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Castelo Branco - Escola Superior de Saúde Dr. Lopes Dias",
             "dependent_institute_id"=>"pt_3050",
             "district"=>"Castelo Branco",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ess.ipcb.pt",
             "email"=>"secretaria@ess.ipcb.pt",
             "domain"=>"@ess.ipcb.pt",
             "phone"=>272340560
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Castelo Branco - Escola Superior de Tecnologia de Castelo Branco",
             "dependent_institute_id"=>"pt_3050",
             "district"=>"Castelo Branco",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.est.ipcb.pt",
             "email"=>"direccao@est.ipcb.pt",
             "domain"=>"@est.ipcb.pt",
             "phone"=>272339300
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Coimbra",
             "district"=>"Coimbra",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ipc.pt",
             "email"=>"politec.coimbra@mail.ipc.pt",
             "domain"=>"@mail.ipc.pt",
             "phone"=>239791250
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Coimbra - Escola Superior Agrária de Coimbra",
             "dependent_institute_id"=>"pt_3060",
             "district"=>"Coimbra",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.esac.pt",
             "email"=>"cdirectivo@mail.esac.pt",
             "domain"=>"@mail.esac.pt",
             "phone"=>239802940
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Coimbra - Escola Superior de Educação de Coimbra",
             "dependent_institute_id"=>"pt_3060",
             "district"=>"Coimbra",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.esec.pt",
             "email"=>"geral@esec.pt",
             "domain"=>"@esec.pt",
             "phone"=>239793120
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Coimbra - Escola Superior de Tecnologia da Saúde de Coimbra",
             "dependent_institute_id"=>"pt_3060",
             "district"=>"Coimbra",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.estescoimbra.pt",
             "email"=>"geral@estescoimbra.pt",
             "domain"=>"@estescoimbra.pt",
             "phone"=>239802430
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Coimbra - Escola Superior de Tecnologia e Gestão de Oliveira do Hospital",
             "dependent_institute_id"=>"pt_3060",
             "district"=>"Coimbra",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.estgoh.ipc.pt",
             "email"=>"geral@estgoh.ipc.pt",
             "domain"=>"@estgoh.ipc.pt",
             "phone"=>238605170
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Coimbra - Instituto Superior de Contabilidade e Administração de Coimbra",
             "dependent_institute_id"=>"pt_3060",
             "district"=>"Coimbra",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.iscac.pt",
             "email"=>"geral@iscac.pt",
             "domain"=>"@iscac.pt",
             "phone"=>239802000
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Coimbra - Instituto Superior de Engenharia de Coimbra",
             "dependent_institute_id"=>"pt_3060",
             "district"=>"Coimbra",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.isec.pt",
             "email"=>"cd@isec.pt",
             "domain"=>"@isec.pt",
             "phone"=>239790200
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Leiria",
             "district"=>"Leiria",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.iplei.pt",
             "email"=>"ipleiria@iplei.pt",
             "domain"=>"@iplei.pt",
             "phone"=>244830010
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Leiria - Escola Superior de Artes e Design das Caldas da Rainha",
             "dependent_institute_id"=>"pt_3100",
             "district"=>"Leiria",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.esad.ipleiria.pt",
             "email"=>"estgad.ipl@mail.telepac.pt",
             "domain"=>"@mail.telepac.pt",
             "phone"=>262830900
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Leiria - Escola Superior de Educação e Ciências Sociais de Leiria",
             "dependent_institute_id"=>"pt_3100",
             "district"=>"Leiria",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.esel.ipleiria.pt",
             "email"=>"eselei@mail.telepat.pt",
             "domain"=>"@mail.telepat.pt",
             "phone"=>244829400
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Leiria - Escola Superior de Saúde de Leiria",
             "dependent_institute_id"=>"pt_3100",
             "district"=>"Leiria",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.esenf.iplei.pt",
             "email"=>"esenf.leiria@esenf.ipleiria.pt",
             "domain"=>"@esenf.ipleiria.pt",
             "phone"=>244845300
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Leiria - Escola Superior de Tecnologia e Gestão de Leiria",
             "dependent_institute_id"=>"pt_3100",
             "district"=>"Leiria",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.estg.ipleiria.pt",
             "email"=>"estg@estg.ipleiria.pt",
             "domain"=>"@estg.ipleiria.pt",
             "phone"=>244820300
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Leiria - Escola Superior de Turismo e Tecnologia do Mar de Peniche",
             "dependent_institute_id"=>"pt_3100",
             "district"=>"Leiria",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.estm.ipleiria.pt",
             "email"=>"estm@estm.iplei.pt",
             "domain"=>"@estm.iplei.pt",
             "phone"=>262783607
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Leiria - Instituto de Investigação, Desenvolvimento e Estudos Avançados",
             "dependent_institute_id"=>"pt_3100",
             "district"=>"Leiria",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.esel.ipleiria.pt",
             "email"=>"eselei@mail.telepat.pt",
             "domain"=>"@mail.telepat.pt",
             "phone"=>"\"\""
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Lisboa",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ipl.pt",
             "email"=>"servicoscentrais@sc.ipl.pt",
             "domain"=>"@sc.ipl.pt",
             "phone"=>217101200
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Lisboa - Escola Superior de Comunicação Social de Lisboa",
             "dependent_institute_id"=>"pt_3110",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.escs.ipl.pt",
             "email"=>"escs@escs.ipl.pt",
             "domain"=>"@escs.ipl.pt",
             "phone"=>"217119000, 217119042"
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Lisboa - Escola Superior de Dança de Lisboa",
             "dependent_institute_id"=>"pt_3110",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.esd.ipl.pt",
             "email"=>"esd@esd.ipl.pt",
             "domain"=>"@esd.ipl.pt",
             "phone"=>213244770
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Lisboa - Escola Superior de Educação de Lisboa",
             "dependent_institute_id"=>"pt_3110",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.eselx.ipl.pt",
             "email"=>"eselx@eselx.ipl.pt",
             "domain"=>"@eselx.ipl.pt",
             "phone"=>"217115500, 217168076"
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Lisboa - Escola Superior de Música de Lisboa",
             "dependent_institute_id"=>"pt_3110",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "email"=>"esml@esm.ipl.pt",
             "domain"=>"@esm.ipl.pt",
             "phone"=>"213224940, 213224944"
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Lisboa - Escola Superior de Teatro e Cinema de Lisboa",
             "dependent_institute_id"=>"pt_3110",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.estc.ipl.pt",
             "email"=>"estc@estc.ipl.pt",
             "domain"=>"@estc.ipl.pt",
             "phone"=>"214987301, 214989400"
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Lisboa - Escola Superior de Tecnologia da Saúde de Lisboa",
             "dependent_institute_id"=>"pt_3110",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.estesl.ipl.pt",
             "email"=>"ESTESL@estesl.pt",
             "domain"=>"@estesl.pt",
             "phone"=>218980400
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Lisboa - Instituto Superior de Contabilidade e Administração de Lisboa",
             "dependent_institute_id"=>"pt_3110",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.iscal.ipl.pt",
             "email"=>"isel@isel.ipl.pt",
             "domain"=>"@isel.ipl.pt",
             "phone"=>"217984500, 217984551"
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Lisboa - Instituto Superior de Engenharia de Lisboa",
             "dependent_institute_id"=>"pt_3110",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.isel.pt",
             "email"=>"isel@isel.ipl.pt",
             "domain"=>"@isel.ipl.pt",
             "phone"=>218317000
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Portalegre",
             "district"=>"Portalegre",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ipportalegre.pt",
             "email"=>"geral@mail.ipportalegre.pt",
             "domain"=>"@mail.ipportalegre.pt",
             "phone"=>245301500
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Portalegre - Escola Superior Agrária de Elvas",
             "dependent_institute_id"=>"pt_3120",
             "district"=>"Portalegre",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.esaelvas.pt",
             "email"=>"esee@mail.esae.ipportagre.pt",
             "domain"=>"@mail.esae.ipportagre.pt",
             "phone"=>"268628528, 268628878"
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Portalegre - Escola Superior de Educação de Portalegre",
             "dependent_institute_id"=>"pt_3120",
             "district"=>"Portalegre",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.esep.pt",
             "email"=>"esep.portalegre@mail.telepac.pt",
             "domain"=>"@mail.telepac.pt",
             "phone"=>245339400
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Portalegre - Escola Superior de Saúde de Portalegre",
             "dependent_institute_id"=>"pt_3120",
             "district"=>"Portalegre",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.essp.pt",
             "email"=>"geral@essp.ipportalegre.pt",
             "domain"=>"@essp.ipportalegre.pt",
             "phone"=>245300430
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Portalegre - Escola Superior de Tecnologia e Gestão de Portalegre",
             "dependent_institute_id"=>"pt_3120",
             "district"=>"Portalegre",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.estgp.pt",
             "email"=>"estg@post.estgp.pt",
             "domain"=>"@post.estgp.pt",
             "phone"=>245300200
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Santarém",
             "district"=>"Santarém",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ipsantarem.pt.",
             "email"=>"geral@ipsantarem.pt",
             "domain"=>"@ipsantarem.pt",
             "phone"=>243309520
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Santarém - Escola Superior Agrária de Santarém",
             "dependent_institute_id"=>"pt_3140",
             "district"=>"Santarém",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.esa-santarem.pt",
             "email"=>"cd@esa-santarem.pt",
             "domain"=>"@esa-santarem.pt",
             "phone"=>243307300
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Santarém - Escola Superior de Desporto de Rio Maior",
             "dependent_institute_id"=>"pt_3140",
             "district"=>"Santarém",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.esdrm.pt",
             "email"=>"geral@esdrm.pt",
             "domain"=>"@esdrm.pt",
             "phone"=>243999280
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Santarém - Escola Superior de Educação de Santarém",
             "dependent_institute_id"=>"pt_3140",
             "district"=>"Santarém",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.eses.pt",
             "email"=>"eses@mail.telepac.pt",
             "domain"=>"@mail.telepac.pt",
             "phone"=>243309180
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Santarém - Escola Superior de Enfermagem de Santarém",
             "dependent_institute_id"=>"pt_3140",
             "district"=>"Santarém",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ipsantarem.pt",
             "email"=>"eses.santarem@mail.telepac.pt",
             "domain"=>"@mail.telepac.pt",
             "phone"=>243307200
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Santarém - Escola Superior de Gestão de Santarém",
             "dependent_institute_id"=>"pt_3140",
             "district"=>"Santarém",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.esgs.pt",
             "email"=>"correio@esgs.pt",
             "domain"=>"@esgs.pt",
             "phone"=>"243303200, 243332188"
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Saúde do Norte",
             "district"=>"Porto",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.cespu.pt",
             "email"=>"info@cespu.pt",
             "domain"=>"@cespu.pt",
             "phone"=>224157100
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Saúde do Norte - Escola Superior de Saúde do Vale do Ave",
             "dependent_institute_id"=>"pt_4107",
             "district"=>"Braga",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.cespu.pt",
             "email"=>"info@essva.cespu.pt",
             "domain"=>"@essva.cespu.pt",
             "phone"=>252303600
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Saúde do Norte - Escola Superior de Saúde do Vale do Sousa",
             "dependent_institute_id"=>"pt_4107",
             "district"=>"Porto",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.cespu.pt",
             "email"=>"cespv.porto@mail.telepac.pt",
             "domain"=>"@mail.telepac.pt",
             "phone"=>224157100
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Setúbal",
             "district"=>"Setúbal",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ips.pt",
             "email"=>"ips@spr.ips.pt",
             "domain"=>"@spr.ips.pt",
             "phone"=>265548820
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Setúbal - Escola Superior de Ciências Empresariais de Setúbal",
             "dependent_institute_id"=>"pt_3150",
             "district"=>"Setúbal",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.esce.ips.pt",
             "email"=>"info@esce.ipl.pt",
             "domain"=>"@esce.ipl.pt",
             "phone"=>"265709306, 265709307"
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Setúbal - Escola Superior de Educação de Setúbal",
             "dependent_institute_id"=>"pt_3150",
             "district"=>"Setúbal",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ese.ips.pt",
             "email"=>"secretaria@ese.ips.pt",
             "domain"=>"@ese.ips.pt",
             "phone"=>265710800
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Setúbal - Escola Superior de Saúde de Setúbal",
             "dependent_institute_id"=>"pt_3150",
             "district"=>"Setúbal",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ips.pt",
             "email"=>"info.ess@ess.ips.pt",
             "domain"=>"@ess.ips.pt",
             "phone"=>265709395
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Setúbal - Escola Superior de Tecnologia de Setúbal",
             "dependent_institute_id"=>"pt_3150",
             "district"=>"Setúbal",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.est.ips.pt",
             "email"=>"info@est.ips.pt",
             "domain"=>"@est.ips.pt",
             "phone"=>265790000
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Setúbal - Escola Superior de Tecnologia do Barreiro",
             "dependent_institute_id"=>"pt_3150",
             "district"=>"Setúbal",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.estbarreiro.ips.pt",
             "email"=>"info@estbarreiro.ips.pt",
             "domain"=>"@estbarreiro.ips.pt",
             "phone"=>212064660
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Tomar",
             "district"=>"Santarém",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ipt.pt",
             "email"=>"sec-presidencia@ipt.pt",
             "domain"=>"@ipt.pt",
             "phone"=>249328100
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Tomar - Escola Superior de Gestão de Tomar",
             "dependent_institute_id"=>"pt_3240",
             "district"=>"Santarém",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.esgt.ipt.pt",
             "email"=>"esgt@ipt.pt",
             "domain"=>"@ipt.pt",
             "phone"=>249328100
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Tomar - Escola Superior de Tecnologia de Abrantes",
             "dependent_institute_id"=>"pt_3240",
             "district"=>"Santarém",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.esta.ipt.pt",
             "email"=>"esta@ipt.pt",
             "domain"=>"@ipt.pt",
             "phone"=>241361169
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Tomar - Escola Superior de Tecnologia de Tomar",
             "dependent_institute_id"=>"pt_3240",
             "district"=>"Santarém",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.estt.ipt.pt",
             "email"=>"estt@ipt.pt",
             "domain"=>"@ipt.pt",
             "phone"=>"249321500, 249328100"
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Viana do Castelo",
             "district"=>"Viana do Castelo",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ipvc.pt",
             "email"=>"geral@ipvc.pt",
             "domain"=>"@ipvc.pt",
             "phone"=>258809610
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Viana do Castelo - Escola Superior Agrária de Ponte de Lima",
             "dependent_institute_id"=>"pt_3160",
             "district"=>"Viana do Castelo",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.esa.ipvc.pt",
             "email"=>"esapl@esa.ipvc.pt",
             "domain"=>"@esa.ipvc.pt",
             "phone"=>"258909740, 258947539"
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Viana do Castelo - Escola Superior de Ciências Empresariais de Valença",
             "dependent_institute_id"=>"pt_3160",
             "district"=>"Viana do Castelo",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.esce.ipvc.pt",
             "email"=>"geral@esce.ipvc.pt",
             "domain"=>"@esce.ipvc.pt",
             "phone"=>251800840
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Viana do Castelo - Escola Superior de Educação de Viana do Castelo",
             "dependent_institute_id"=>"pt_3160",
             "district"=>"Viana do Castelo",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ese.ipvc.pt",
             "email"=>"esevc@ese.ipvc.pt",
             "domain"=>"@ese.ipvc.pt",
             "phone"=>258806200
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Viana do Castelo - Escola Superior de Enfermagem de Viana do Castelo",
             "dependent_institute_id"=>"pt_3160",
             "district"=>"Viana do Castelo",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.esenf.ipvc.pt",
             "email"=>"esenfvc@esenfvc.pt",
             "domain"=>"@esenfvc.pt",
             "phone"=>258809550
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Viana do Castelo - Escola Superior de Tecnologia e Gestão de Viana do Castelo",
             "dependent_institute_id"=>"pt_3160",
             "district"=>"Viana do Castelo",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.estg.ipvc.pt",
             "email"=>"geral@estg.ipvc.pt",
             "domain"=>"@estg.ipvc.pt",
             "phone"=>"258819700, 258828802"
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Viseu",
             "district"=>"Viseu",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ipv.pt",
             "email"=>"ipv@ipv.pt",
             "domain"=>"@ipv.pt",
             "phone"=>"232480700, 232480708"
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Viseu - Escola Superior Agrária de Viseu",
             "dependent_institute_id"=>"pt_3180",
             "district"=>"Viseu",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.esav.ipv.pt",
             "email"=>"afpmorais@esav.ipv.pt",
             "domain"=>"@esav.ipv.pt",
             "phone"=>232446600
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Viseu - Escola Superior de Educação de Viseu",
             "dependent_institute_id"=>"pt_3180",
             "district"=>"Viseu",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.esev.ipv.pt",
             "email"=>"esev@mail.telepac.pt",
             "domain"=>"@mail.telepac.pt",
             "phone"=>232419000
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Viseu - Escola Superior de Educação de Viseu (Lamego)",
             "dependent_institute_id"=>"pt_3180",
             "district"=>"Viseu",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.esel.ipv.pt",
             "email"=>"esel@esel.ipv.pt",
             "domain"=>"@esel.ipv.pt",
             "phone"=>"254612221, 254656878"
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Viseu - Escola Superior de Saúde de Viseu",
             "dependent_institute_id"=>"pt_3180",
             "district"=>"Viseu",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.essv.ipv.pt",
             "email"=>"secretaria@esenfviseu.pt",
             "domain"=>"@esenfviseu.pt",
             "phone"=>232419100
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Viseu - Escola Superior de Tecnologia de Viseu",
             "dependent_institute_id"=>"pt_3180",
             "district"=>"Viseu",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.estv.ipv.pt",
             "email"=>"estv@.mail.estv.ipv.pt",
             "domain"=>"@.mail.estv.ipv.pt",
             "phone"=>232480500
            ));
            School::create(array(
             "name"=>"Instituto Politécnico de Viseu - Escola Superior de Tecnologia e Gestão de Lamego",
             "dependent_institute_id"=>"pt_3180",
             "district"=>"Viseu",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ipv.pt/estg",
             "email"=>"ipv@ipv.pt",
             "domain"=>"@ipv.pt",
             "phone"=>254615477
            ));
            School::create(array(
             "name"=>"Instituto Politécnico do Cávado e do Ave",
             "district"=>"Braga",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ipca.pt",
             "email"=>"geral@ipca.pt",
             "domain"=>"@ipca.pt",
             "phone"=>253802190
            ));
            School::create(array(
             "name"=>"Instituto Politécnico do Cávado e do Ave - Escola Superior de Gestão",
             "dependent_institute_id"=>"pt_3030",
             "district"=>"Braga",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.esg.ipca.pt",
             "email"=>"esg@ipca.pt",
             "domain"=>"@ipca.pt",
             "phone"=>253802260
            ));
            School::create(array(
             "name"=>"Instituto Politécnico do Cávado e do Ave - Escola Superior de Tecnologia",
             "dependent_institute_id"=>"pt_3030",
             "district"=>"Braga",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "email"=>"est@ipca.pt",
             "domain"=>"@ipca.pt",
             "phone"=>"253802261, 253802262"
            ));
            School::create(array(
             "name"=>"Instituto Politécnico do Porto",
             "district"=>"Porto",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ipp.pt",
             "email"=>"ipp@ipp.pt",
             "domain"=>"@ipp.pt",
             "phone"=>225571000
            ));
            School::create(array(
             "name"=>"Instituto Politécnico do Porto - Escola Superior de Educação do Porto",
             "dependent_institute_id"=>"pt_3130",
             "district"=>"Porto",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ese.ipp.pt",
             "email"=>"ese@ese.ipp.pt",
             "domain"=>"@ese.ipp.pt",
             "phone"=>"225073460, 225073467"
            ));
            School::create(array(
             "name"=>"Instituto Politécnico do Porto - Escola Superior de Estudos Industriais e de Gestão",
             "dependent_institute_id"=>"pt_3130",
             "district"=>"Porto",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.eseig.ipp.pt",
             "email"=>"eseig@eseig.ipp.pt",
             "domain"=>"@eseig.ipp.pt",
             "phone"=>252291700
            ));
            School::create(array(
             "name"=>"Instituto Politécnico do Porto - Escola Superior de Música e das Artes do Espectáculo do Porto",
             "dependent_institute_id"=>"pt_3130",
             "district"=>"Porto",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.esmae-ipp.pt",
             "email"=>"esmae@esmae-ipp.pt",
             "domain"=>"@esmae-ipp.pt",
             "phone"=>"225193760, 225193761"
            ));
            School::create(array(
             "name"=>"Instituto Politécnico do Porto - Escola Superior de Tecnologia da Saúde do Porto",
             "dependent_institute_id"=>"pt_3130",
             "district"=>"Porto",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.estsp.ipp.pt",
             "email"=>"geral@estsp.ipp.pt",
             "domain"=>"@estsp.ipp.pt",
             "phone"=>222061000
            ));
            School::create(array(
             "name"=>"Instituto Politécnico do Porto - Escola Superior de Tecnologia e Gestão de Felgueiras",
             "dependent_institute_id"=>"pt_3130",
             "district"=>"Porto",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.estgf.ipp.pt",
             "email"=>"estgf@estgf.ipp.pt",
             "domain"=>"@estgf.ipp.pt",
             "phone"=>255314002
            ));
            School::create(array(
             "name"=>"Instituto Politécnico do Porto - Instituto Superior de Contabilidade e Administração do Porto",
             "dependent_institute_id"=>"pt_3130",
             "district"=>"Porto",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.iscap.ipp.pt",
             "email"=>"instituto@iscap.ipp.pt",
             "domain"=>"@iscap.ipp.pt",
             "phone"=>229050000
            ));
            School::create(array(
             "name"=>"Instituto Politécnico do Porto - Instituto Superior de Engenharia do Porto",
             "dependent_institute_id"=>"pt_3130",
             "district"=>"Porto",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.isep.ipp.pt",
             "email"=>"isep@isep.ipp.pt",
             "domain"=>"@isep.ipp.pt",
             "phone"=>228349180
            ));
            School::create(array(
             "name"=>"Instituto Português de Administração de Marketing de Lisboa",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ipam.pt",
             "email"=>"ipam@ipam.pt",
             "domain"=>"@ipam.pt",
             "phone"=>218360030
            ));
            School::create(array(
             "name"=>"Instituto Português de Administração de Marketing de Matosinhos",
             "district"=>"Porto",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ipam.pt",
             "email"=>"ipam@ipam.pt",
             "domain"=>"@ipam.pt",
             "phone"=>229398080
            ));
            School::create(array(
             "name"=>"Instituto Português de Administração de Marketing de Matosinhos (Aveiro)",
             "district"=>"Aveiro",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ipam.pt",
             "email"=>"ipam@ipam.pt",
             "domain"=>"@ipam.pt",
             "phone"=>234400180
            ));
            School::create(array(
             "name"=>"Instituto Superior Autónomo de Estudos Politécnicos",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ipa.univ.pt",
             "email"=>"secretaria@ipa.univ.pt",
             "domain"=>"@ipa.univ.pt",
             "phone"=>218610360
            ));
            School::create(array(
             "name"=>"Instituto Superior Bissaya Barreto",
             "district"=>"Coimbra",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.isbb.pt",
             "email"=>"isbb@isbb.pt",
             "domain"=>"@isbb.pt",
             "phone"=>239800450
            ));
            School::create(array(
             "name"=>"Instituto Superior D. Afonso III",
             "district"=>"Faro",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.inuaf-studia.pt",
             "email"=>"inuaf@mail.telepac.pt",
             "domain"=>"@mail.telepac.pt",
             "phone"=>289420480
            ));
            School::create(array(
             "name"=>"Instituto Superior D. Dinis",
             "district"=>"Leiria",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.isdom.pt",
             "email"=>"informacoes@isdom.pt",
             "domain"=>"@isdom.pt",
             "phone"=>244503800
            ));
            School::create(array(
             "name"=>"Instituto Superior da Maia",
             "district"=>"Porto",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ismai.pt",
             "email"=>"info@ismai.pt",
             "domain"=>"@ismai.pt",
             "phone"=>229866000
            ));
            School::create(array(
             "name"=>"Instituto Superior de Administração e Gestão",
             "district"=>"Porto",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.isag.pt",
             "email"=>"isag@isag.pt",
             "domain"=>"@isag.pt",
             "phone"=>220303200
            ));
            School::create(array(
             "name"=>"Instituto Superior de Administração e Línguas",
             "district"=>"R. A. Madeira",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.isal.pt",
             "email"=>"cenil@mail.telepac.pt",
             "domain"=>"@mail.telepac.pt",
             "phone"=>291705705
            ));
            School::create(array(
             "name"=>"Instituto Superior de Ciências da Administração",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.iscad.pt",
             "email"=>"informacoes@iscad.pt",
             "domain"=>"@iscad.pt",
             "phone"=>213261440
            ));
            School::create(array(
             "name"=>"Instituto Superior de Ciências da Informação e da Administração",
             "district"=>"Aveiro",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.iscia.edu.pt",
             "email"=>"iscia@mail.telepac.pt",
             "domain"=>"@mail.telepac.pt",
             "phone"=>234423045
            ));
            School::create(array(
             "name"=>"Instituto Superior de Ciências da Saúde - Norte",
             "district"=>"Porto",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.cespu.pt",
             "email"=>"DirISCSN@cespu.pt",
             "domain"=>"@cespu.pt",
             "phone"=>224157100
            ));
            School::create(array(
             "name"=>"Instituto Superior de Ciências da Saúde Egas Moniz",
             "district"=>"Setúbal",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.egasmoniz.edu.pt/iscseg",
             "email"=>"iscss@iscss.pt",
             "domain"=>"@iscss.pt",
             "phone"=>212946700
            ));
            School::create(array(
             "name"=>"Instituto Superior de Ciências Educativas",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.isce-odivelas.com",
             "email"=>"isce-odivelas@pedago.pt",
             "domain"=>"@pedago.pt",
             "phone"=>219347135
            ));
            School::create(array(
             "name"=>"Instituto Superior de Ciências Educativas de Felgueiras",
             "district"=>"Porto",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.isce-felgueiras.com",
             "email"=>"isce-felgueiras@pedago.pt",
             "domain"=>"@pedago.pt",
             "phone"=>255318550
            ));
            School::create(array(
             "name"=>"Instituto Superior de Ciências Empresariais e do Turismo",
             "district"=>"Porto",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.iscet.pt",
             "email"=>"iscet@iscet.pt",
             "domain"=>"@iscet.pt",
             "phone"=>222053685
            ));
            School::create(array(
             "name"=>"Instituto Superior de Ciências Policiais e Segurança Interna",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.esp.pt",
             "email"=>"esp@esp.pt",
             "domain"=>"@esp.pt",
             "phone"=>213613900
            ));
            School::create(array(
             "name"=>"Instituto Superior de Comunicação Empresarial",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.iscem.pt",
             "email"=>"regina.moreira@iscem.pt",
             "domain"=>"@iscem.pt",
             "phone"=>213474283
            ));
            School::create(array(
             "name"=>"Instituto Superior de Educação e Ciências",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.isec.universitas.pt",
             "email"=>"info@isec.universitas.pt",
             "domain"=>"@isec.universitas.pt",
             "phone"=>217541310
            ));
            School::create(array(
             "name"=>"Instituto Superior de Educação e Trabalho",
             "district"=>"Porto",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.iset.pt",
             "email"=>"iset@mail.telepac.pt",
             "domain"=>"@mail.telepac.pt",
             "phone"=>225073890
            ));
            School::create(array(
             "name"=>"Instituto Superior de Entre Douro e Vouga",
             "district"=>"Aveiro",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.isvouga.com",
             "email"=>"isvouga@mail.telepac.pt",
             "domain"=>"@mail.telepac.pt",
             "phone"=>256377550
            ));
            School::create(array(
             "name"=>"Instituto Superior de Espinho",
             "district"=>"Aveiro",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.isesp.pt",
             "email"=>"isesp@isesp.pt",
             "domain"=>"@isesp.pt",
             "phone"=>227322624
            ));
            School::create(array(
             "name"=>"Instituto Superior de Estudos Interculturais e Transdisciplinares - Almada",
             "district"=>"Setúbal",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ipiaget.org",
             "email"=>"iseit.almada@almada.ipiaget.org",
             "domain"=>"@almada.ipiaget.org",
             "phone"=>212946250
            ));
            School::create(array(
             "name"=>"Instituto Superior de Estudos Interculturais e Transdisciplinares - Mirandela",
             "district"=>"Bragança",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ipiaget.org",
             "email"=>"iseit.mir@mirandela.ipiaget.org",
             "domain"=>"@mirandela.ipiaget.org",
             "phone"=>278200150
            ));
            School::create(array(
             "name"=>"Instituto Superior de Estudos Interculturais e Transdisciplinares - Santo André",
             "district"=>"Setúbal",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ipiaget.org",
             "email"=>"info.standre@standre.ipiaget.org",
             "domain"=>"@standre.ipiaget.org",
             "phone"=>269708710
            ));
            School::create(array(
             "name"=>"Instituto Superior de Estudos Interculturais e Transdisciplinares - Viseu",
             "district"=>"Viseu",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ipiaget.org",
             "email"=>"infou@viseu.ipiaget.org",
             "domain"=>"@viseu.ipiaget.org",
             "phone"=>232910100
            ));
            School::create(array(
             "name"=>"Instituto Superior de Gestão",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.isg.pt",
             "email"=>"isg@isg.pt",
             "domain"=>"@isg.pt",
             "phone"=>217513700
            ));
            School::create(array(
             "name"=>"Instituto Superior de Gestão Bancária",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.isgb.pt",
             "email"=>"isgb@ifb.pt",
             "domain"=>"@ifb.pt",
             "phone"=>217916210
            ));
            School::create(array(
             "name"=>"Instituto Superior de Informática e Gestão",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.isig.pt",
             "email"=>"info@isig.pt",
             "domain"=>"@isig.pt",
             "phone"=>218459280
            ));
            School::create(array(
             "name"=>"Instituto Superior de Línguas e Administração de Bragança",
             "district"=>"Bragança",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.islabraganca.pt",
             "email"=>"info@islabraganca.pt",
             "domain"=>"@islabraganca.pt",
             "phone"=>273331434
            ));
            School::create(array(
             "name"=>"Instituto Superior de Línguas e Administração de Leiria",
             "district"=>"Leiria",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.islaleiria.pt",
             "email"=>"info@islaleiria.pt",
             "domain"=>"@islaleiria.pt",
             "phone"=>244820650
            ));
            School::create(array(
             "name"=>"Instituto Superior de Línguas e Administração de Lisboa",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.isla.pt",
             "email"=>"isla.lisboa@lx.isla.pt",
             "domain"=>"@lx.isla.pt",
             "phone"=>210309900
            ));
            School::create(array(
             "name"=>"Instituto Superior de Línguas e Administração de Santarém",
             "district"=>"Santarém",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.islasantarem.pt",
             "email"=>"info@str.isla.pt",
             "domain"=>"@str.isla.pt",
             "phone"=>243305880
            ));
            School::create(array(
             "name"=>"Instituto Superior de Línguas e Administração de Vila Nova de Gaia",
             "district"=>"Porto",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.islagaia.pt",
             "email"=>"isla@mail.islagaia.pt",
             "domain"=>"@mail.islagaia.pt",
             "phone"=>223772980
            ));
            School::create(array(
             "name"=>"Instituto Superior de Novas Profissões",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.inp.pt",
             "email"=>"inp@inp.pt",
             "domain"=>"@inp.pt",
             "phone"=>217508010
            ));
            School::create(array(
             "name"=>"Instituto Superior de Paços de Brandão",
             "district"=>"Aveiro",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ispab.pt",
             "email"=>"ispab@netvisao.pt",
             "domain"=>"@netvisao.pt",
             "phone"=>"227449277, 227451005"
            ));
            School::create(array(
             "name"=>"Instituto Superior de Psicologia Aplicada de Beja",
             "district"=>"Beja",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ispa.pt",
             "email"=>"info@ispa.pt",
             "domain"=>"@ispa.pt",
             "phone"=>"284321450, 284321451"
            ));
            School::create(array(
             "name"=>"Instituto Superior de Saúde do Alto Ave",
             "district"=>"Braga",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.isave.edu.pt",
             "email"=>"geral@isave.edu.pt",
             "domain"=>"@isave.edu.pt",
             "phone"=>253639800
            ));
            School::create(array(
             "name"=>"Instituto Superior de Serviço Social do Porto",
             "district"=>"Porto",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.cesss.isssp.pt",
             "email"=>"isssp@esoterica.pt",
             "domain"=>"@esoterica.pt",
             "phone"=>229577210
            ));
            School::create(array(
             "name"=>"Instituto Superior de Tecnologias Avançadas de Lisboa",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.istec.pt",
             "email"=>"secretaria@istec.pt",
             "domain"=>"@istec.pt",
             "phone"=>"218436670, 218436677"
            ));
            School::create(array(
             "name"=>"Instituto Superior de Tecnologias Avançadas de Lisboa (Porto)",
             "district"=>"Porto",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.istec.pt",
             "email"=>"secretaria-porto@istec.pt",
             "domain"=>"@istec.pt",
             "phone"=>225193220
            ));
            School::create(array(
             "name"=>"Instituto Superior Manuel Teixeira Gomes",
             "district"=>"Faro",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ismat.pt",
             "email"=>"info@ismat.pt",
             "domain"=>"@ismat.pt",
             "phone"=>"282450430, 282450438"
            ));
            School::create(array(
             "name"=>"Instituto Superior Miguel Torga",
             "district"=>"Coimbra",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ismt.pt",
             "email"=>"ismt@ismt.pt",
             "domain"=>"@ismt.pt",
             "phone"=>"239483055, 239488030"
            ));
            // School::create(array(
            //  "name"=>"Instituto Superior Politécnico do Oeste",
            //  "district"=>"Lisboa",
            //  "country"=>"pt",
            //  "skip_email_validation"=>true,
            //  "website"=>"http://www.ispo.pt",
            //  "email"=>"ismt@ismt.pt",
            //  "domain"=>"@ismt.pt",
            //  "phone"=>"261316104, 261316106"
            // ));
            School::create(array(
             "name"=>"Instituto Superior Politécnico Gaya",
             "district"=>"Porto",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ispgaya.pt",
             "email"=>"info@ispgaya.pt",
             "domain"=>"@ispgaya.pt",
             "phone"=>220134481
            ));
            School::create(array(
             "name"=>"Instituto Superior Politécnico Gaya - Escola Superior de Ciência e Tecnologia",
             "dependent_institute_id"=>"pt_4440",
             "district"=>"Porto",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ispgaya.pt/esct",
             "email"=>"info@ispgaya.pt",
             "domain"=>"@ispgaya.pt",
             "phone"=>220134481
            ));
            School::create(array(
             "name"=>"Instituto Superior Politécnico Gaya - Escola Superior de Desenvolvimento Social e Comunitário",
             "dependent_institute_id"=>"pt_4440",
             "district"=>"Porto",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ispgaya.pt",
             "email"=>"info@ispgaya.pt",
             "domain"=>"@ispgaya.pt",
             "phone"=>220134481
            ));
            School::create(array(
             "name"=>"ISCTE - Instituto Universitário de Lisboa",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.iscte.pt",
             "email"=>"relacoes.exteriores@iscte.pt",
             "domain"=>"@iscte.pt",
             "phone"=>217903000
            ));
            School::create(array(
             "name"=>"ISPA-Instituto Universitário de Psicologia Aplicada",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ispa.pt",
             "email"=>"info@ispa.pt",
             "domain"=>"@ispa.pt",
             "phone"=>218811700
            ));
            School::create(array(
             "name"=>"Universidade Aberta",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.univ-ab.pt",
             "email"=>"rpubli@univ-ab.pt",
             "domain"=>"@univ-ab.pt",
             "phone"=>213916300
            ));
            School::create(array(
             "name"=>"Universidade Atlântica",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.uatla.pt",
             "email"=>"informar@uatla.pt",
             "domain"=>"@uatla.pt",
             "phone"=>214398200
            ));
            School::create(array(
             "name"=>"Universidade Autónoma de Lisboa Luís de Camões",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.universidade-autonoma.pt",
             "email"=>"secgeral@universidade.autonoma.pt",
             "domain"=>"@universidade.autonoma.pt",
             "phone"=>"213177690, 213177691"
            ));
            School::create(array(
             "name"=>"Universidade Católica Portuguesa",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ucp.pt",
             "email"=>"info@reitoria.ucp.pt",
             "domain"=>"@reitoria.ucp.pt",
             "phone"=>"217214000, 217265817"
            ));
            School::create(array(
             "name"=>"Universidade Católica Portuguesa - Centro Regional das Beiras",
             "dependent_institute_id"=>"pt_2200",
             "district"=>"Viseu",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.crb.ucp.pt",
             "email"=>"viseu@crb.ucp.pt",
             "domain"=>"@crb.ucp.pt",
             "phone"=>232430200
            ));
            School::create(array(
             "name"=>"Universidade Católica Portuguesa - Escola das Artes",
             "dependent_institute_id"=>"pt_2200",
             "district"=>"Porto",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.artes.ucp.pt",
             "email"=>"artes@porto.ucp.pt",
             "domain"=>"@porto.ucp.pt",
             "phone"=>"226196200, 226196284"
            ));
            School::create(array(
             "name"=>"Universidade Católica Portuguesa - Escola das Artes (em regime de extensão em Lisboa)",
             "dependent_institute_id"=>"pt_2200",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ucp.pt",
             "email"=>"artes@ea.lisboa.ucp.pt",
             "domain"=>"@ea.lisboa.ucp.pt",
             "phone"=>217214018
            ));
            School::create(array(
             "name"=>"Universidade Católica Portuguesa - Escola Superior de Biotecnologia",
             "dependent_institute_id"=>"pt_2200",
             "district"=>"Porto",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.esb.ucp.pt",
             "email"=>"esb@esb.ucp.pt",
             "domain"=>"@esb.ucp.pt",
             "phone"=>225580001
            ));
            School::create(array(
             "name"=>"Universidade Católica Portuguesa - Escola Superior de Biotecnologia (Caldas da Rainha)",
             "dependent_institute_id"=>"pt_2200",
             "district"=>"Leiria",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.esb.ucp.pt",
             "email"=>"secretaria.caldas@esb.ucp.pt",
             "domain"=>"@esb.ucp.pt",
             "phone"=>262839330
            ));
            // School::create(array(
            //  "name"=>"Universidade Católica Portuguesa - Escola Superior Politécnica de Saúde (Lisboa)",
            //  "dependent_institute_id"=>"pt_2200",
            //  "district"=>"Lisboa",
            //  "country"=>"pt",
            //  "skip_email_validation"=>true,
            //  "phone"=>"217521540, 217521541"
            // ));
            // School::create(array(
            //  "name"=>"Universidade Católica Portuguesa - Escola Superior Politécnica de Saúde (Porto)",
            //  "dependent_institute_id"=>"pt_2200",
            //  "district"=>"Porto",
            //  "country"=>"pt",
            //  "skip_email_validation"=>true,
            //  "phone"=>225580001
            // ));
            School::create(array(
             "name"=>"Universidade Católica Portuguesa - Escola Superior Politécnica de Saúde (Viseu)",
             "dependent_institute_id"=>"pt_2200",
             "district"=>"Viseu",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.crb.ucp.pt",
             "email"=>"viseu@crb.ucp.pt",
             "domain"=>"@crb.ucp.pt",
             "phone"=>232430200
            ));
            School::create(array(
             "name"=>"Universidade Católica Portuguesa - Faculdade de Ciências Económicas e Empresariais",
             "dependent_institute_id"=>"pt_2200",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.fcee.ucp.pt",
             "email"=>"aferrao@fcee.ucp.pt",
             "domain"=>"@fcee.ucp.pt",
             "phone"=>217269537
            ));
            School::create(array(
             "name"=>"Universidade Católica Portuguesa - Faculdade de Ciências Humanas",
             "dependent_institute_id"=>"pt_2200",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ucp.pt/fch",
             "email"=>"direccao@fch.ucp.pt",
             "domain"=>"@fch.ucp.pt",
             "phone"=>"217214000, 217265692"
            ));
            School::create(array(
             "name"=>"Universidade Católica Portuguesa - Faculdade de Ciências Sociais",
             "dependent_institute_id"=>"pt_2200",
             "district"=>"Braga",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ucp.pt/crbraga",
             "email"=>"crbrfacis@hotmail.com",
             "domain"=>"@hotmail.com",
             "phone"=>253206100
            ));
            School::create(array(
             "name"=>"Universidade Católica Portuguesa - Faculdade de Direito (Porto)",
             "dependent_institute_id"=>"pt_2200",
             "district"=>"Porto",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.porto.ucp.pt",
             "email"=>"info@porto.ucp.pt",
             "domain"=>"@porto.ucp.pt",
             "phone"=>"226196200, 226196284"
            ));
            School::create(array(
             "name"=>"Universidade Católica Portuguesa - Faculdade de Economia e Gestão",
             "dependent_institute_id"=>"pt_2200",
             "district"=>"Porto",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.porto.ucp.pt",
             "email"=>"info@porto.ucp.pt",
             "domain"=>"@porto.ucp.pt",
             "phone"=>"226196200, 226196294"
            ));
            School::create(array(
             "name"=>"Universidade Católica Portuguesa - Faculdade de Educação e Psicologia",
             "dependent_institute_id"=>"pt_2200",
             "district"=>"Porto",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.porto.ucp.pt",
             "email"=>"iedu@iedu.ucp.pt",
             "domain"=>"@iedu.ucp.pt",
             "phone"=>"226196200, 226196284"
            ));
            School::create(array(
             "name"=>"Universidade Católica Portuguesa - Faculdade de Educação e Psicologia (Lisboa)",
             "dependent_institute_id"=>"pt_2200",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "email"=>"iedu@iedu.ucp.pt",
             "domain"=>"@iedu.ucp.pt",
             "phone"=>217214000
            ));
            School::create(array(
             "name"=>"Universidade Católica Portuguesa - Faculdade de Engenharia",
             "dependent_institute_id"=>"pt_2200",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.fe.ucp.pt",
             "email"=>"info@fe.ucp.pt",
             "domain"=>"@fe.ucp.pt",
             "phone"=>214269770
            ));
            School::create(array(
             "name"=>"Universidade Católica Portuguesa - Faculdade de Filosofia",
             "dependent_institute_id"=>"pt_2200",
             "district"=>"Braga",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.facfil.ucp.pt",
             "email"=>"secretaria@facfil.ucp.pt",
             "domain"=>"@facfil.ucp.pt",
             "phone"=>253201200
            ));
            School::create(array(
             "name"=>"Universidade Católica Portuguesa - Faculdade de Teologia",
             "dependent_institute_id"=>"pt_2200",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ucp.pt/ft",
             "email"=>"direccao@ft.ucp.pt",
             "domain"=>"@ft.ucp.pt",
             "phone"=>"217214000, 217265621"
            ));
            School::create(array(
             "name"=>"Universidade Católica Portuguesa - Faculdade de Teologia (Braga)",
             "dependent_institute_id"=>"pt_2200",
             "district"=>"Braga",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ucp.pt/ft",
             "email"=>"teo@mail.crbr.ucp.pt",
             "domain"=>"@mail.crbr.ucp.pt",
             "phone"=>253206100
            ));
            School::create(array(
             "name"=>"Universidade Católica Portuguesa - Faculdade de Teologia (Porto)",
             "dependent_institute_id"=>"pt_2200",
             "district"=>"Porto",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.porto.ucp.pt",
             "email"=>"dirft@porto.ucp.pt",
             "domain"=>"@porto.ucp.pt",
             "phone"=>226196271
            ));
            School::create(array(
             "name"=>"Universidade Católica Portuguesa - Instituto de Bioética",
             "dependent_institute_id"=>"pt_2200",
             "district"=>"Porto",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.porto.ucp.pt",
             "email"=>"ib@porto.ucp.pt",
             "domain"=>"@porto.ucp.pt",
             "phone"=>"226196200, 226196284"
            ));
            School::create(array(
             "name"=>"Universidade Católica Portuguesa - Instituto de Ciências da Saúde",
             "dependent_institute_id"=>"pt_2200",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ics.lisboa.ucp.pt",
             "email"=>"saude@ics.lisboa.ucp.pt",
             "domain"=>"@ics.lisboa.ucp.pt",
             "phone"=>217214147
            ));
            School::create(array(
             "name"=>"Universidade Católica Portuguesa - Instituto de Ciências da Saúde (Porto)",
             "dependent_institute_id"=>"pt_2200",
             "district"=>"Porto",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ics.porto.ucp.pt",
             "email"=>"saude@ics.porto.ucp.pt",
             "domain"=>"@ics.porto.ucp.pt",
             "phone"=>225580001
            ));
            School::create(array(
             "name"=>"Universidade Católica Portuguesa - Instituto de Estudos Europeus",
             "dependent_institute_id"=>"pt_2200",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ucp.pt/iee/iee.htm",
             "email"=>"iee@iee.ucp.pt",
             "domain"=>"@iee.ucp.pt",
             "phone"=>217214061
            ));
            School::create(array(
             "name"=>"Universidade Católica Portuguesa - Instituto de Estudos Orientais",
             "dependent_institute_id"=>"pt_2200",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "email"=>"ieo@fe.ucp.pt",
             "domain"=>"@fe.ucp.pt",
             "phone"=>214269770
            ));
            School::create(array(
             "name"=>"Universidade Católica Portuguesa - Instituto de Estudos Políticos",
             "dependent_institute_id"=>"pt_2200",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "email"=>"imoreira@iep.ucp.pt",
             "domain"=>"@iep.ucp.pt",
             "phone"=>217214000
            ));
            School::create(array(
             "name"=>"Universidade Católica Portuguesa - Universidade Católica Portuguesa - ",
             "dependent_institute_id"=>"pt_2200",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ucp.pt/fd",
             "email"=>"scasaca@fd.ucp.pt",
             "domain"=>"@fd.ucp.pt",
             "phone"=>"217214176, 217265075"
            ));
            School::create(array(
             "name"=>"Universidade da Beira Interior",
             "district"=>"Castelo Branco",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ubi.pt",
             "email"=>"geral@ubi.pt",
             "domain"=>"@ubi.pt",
             "phone"=>275319700
            ));
            School::create(array(
             "name"=>"Universidade da Madeira",
             "district"=>"R. A. Madeira",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.uma.pt",
             "email"=>"acaduma@uma.pt",
             "domain"=>"@uma.pt",
             "phone"=>291209400
            ));
            School::create(array(
             "name"=>"Universidade da Madeira - Escola Superior de Enfermagem da Madeira",
             "dependent_institute_id"=>"pt_1300",
             "district"=>"R. A. Madeira",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.uma.pt/esem",
             "email"=>"esemadeira@uma.pt",
             "domain"=>"@uma.pt",
             "phone"=>291705133
            ));
            School::create(array(
             "name"=>"Universidade de Aveiro",
             "district"=>"Aveiro",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ua.pt",
             "email"=>"reitoria@ua.pt",
             "domain"=>"@ua.pt",
             "phone"=>"234370200, 234370211"
            ));
            School::create(array(
             "name"=>"Universidade de Aveiro - Escola Superior de Design, Gestão e Tecnologias da Produção de Aveiro-Norte",
             "dependent_institute_id"=>"pt_300",
             "district"=>"Aveiro",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.aveiro-norte.ua.pt",
             "email"=>"aveiro-norte@adm.ua.pt",
             "domain"=>"@adm.ua.pt",
             "phone"=>256666960
            ));
            School::create(array(
             "name"=>"Universidade de Aveiro - Escola Superior de Saúde de Aveiro",
             "dependent_institute_id"=>"pt_300",
             "district"=>"Aveiro",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.essua.ua.pt",
             "email"=>"sre@adm.ua.pt",
             "domain"=>"@adm.ua.pt",
             "phone"=>234401558
            ));
            School::create(array(
             "name"=>"Universidade de Aveiro - Escola Superior de Tecnologia e Gestão de Águeda",
             "dependent_institute_id"=>"pt_300",
             "district"=>"Aveiro",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.estga.ua.pt",
             "email"=>"estga@ua.pt",
             "domain"=>"@ua.pt",
             "phone"=>"234603839, 234603840"
            ));
            School::create(array(
             "name"=>"Universidade de Aveiro - Instituto Superior de Contabilidade e Administração de Aveiro",
             "dependent_institute_id"=>"pt_300",
             "district"=>"Aveiro",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.isca.ua.pt",
             "email"=>"geral@isca.ua.pt",
             "domain"=>"@isca.ua.pt",
             "phone"=>234380110
            ));
            School::create(array(
             "name"=>"Universidade de Coimbra",
             "district"=>"Coimbra",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.uc.pt",
             "email"=>"ucadmin@adm.uc.pt",
             "domain"=>"@adm.uc.pt",
             "phone"=>"239859900, 239859910"
            ));
            School::create(array(
             "name"=>"Universidade de Coimbra - Colégio das Artes",
             "dependent_institute_id"=>"pt_500",
             "district"=>"Coimbra",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.uc.pt",
             "email"=>"abilio.hernandez@sapo.pt",
             "domain"=>"@sapo.pt",
             "phone"=>239859900
            ));
            School::create(array(
             "name"=>"Universidade de Coimbra - Faculdade de Ciências do Desporto e Educação Física",
             "dependent_institute_id"=>"pt_500",
             "district"=>"Coimbra",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.fcdef.uc.pt",
             "email"=>"cd@fcdef.uc.pt",
             "domain"=>"@fcdef.uc.pt",
             "phone"=>239802770
            ));
            School::create(array(
             "name"=>"Universidade de Coimbra - Faculdade de Ciências e Tecnologia",
             "dependent_institute_id"=>"pt_500",
             "district"=>"Coimbra",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.fct.uc.pt",
             "email"=>"fctuc@fct.uc.pt",
             "domain"=>"@fct.uc.pt",
             "phone"=>"239700600, 239700613"
            ));
            School::create(array(
             "name"=>"Universidade de Coimbra - Faculdade de Direito",
             "dependent_institute_id"=>"pt_500",
             "district"=>"Coimbra",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.fd.uc.pt",
             "email"=>"fduc@fd.uc.pt",
             "domain"=>"@fd.uc.pt",
             "phone"=>"239859801, 239859802"
            ));
            School::create(array(
             "name"=>"Universidade de Coimbra - Faculdade de Economia",
             "dependent_institute_id"=>"pt_500",
             "district"=>"Coimbra",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.fe.uc.pt",
             "email"=>"feuc@sonata.fe.uc.pt",
             "domain"=>"@sonata.fe.uc.pt",
             "phone"=>239790500
            ));
            School::create(array(
             "name"=>"Universidade de Coimbra - Faculdade de Farmácia",
             "dependent_institute_id"=>"pt_500",
             "district"=>"Coimbra",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ff.uc.pt",
             "email"=>"ffuc@ci.uc.pt",
             "domain"=>"@ci.uc.pt",
             "phone"=>"239859900, 239859950"
            ));
            School::create(array(
             "name"=>"Universidade de Coimbra - Faculdade de Letras",
             "dependent_institute_id"=>"pt_500",
             "district"=>"Coimbra",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.fl.uc.pt",
             "email"=>"flcd@ci.uc.pt",
             "domain"=>"@ci.uc.pt",
             "phone"=>"239859930, 239859931"
            ));
            School::create(array(
             "name"=>"Universidade de Coimbra - Faculdade de Medicina",
             "dependent_institute_id"=>"pt_500",
             "district"=>"Coimbra",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.fmed.uc.pt",
             "email"=>"secretaria@fmed.uc.pt",
             "domain"=>"@fmed.uc.pt",
             "phone"=>239857700
            ));
            School::create(array(
             "name"=>"Universidade de Coimbra - Faculdade de Psicologia e de Ciências da Educação",
             "dependent_institute_id"=>"pt_500",
             "district"=>"Coimbra",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.fpce.uc.pt",
             "email"=>"c.directivo@fpce.uc.pt",
             "domain"=>"@fpce.uc.pt",
             "phone"=>"239851450, 239851458"
            ));
            School::create(array(
             "name"=>"Universidade de Coimbra - Instituto Climatologia e Hidrologia",
             "dependent_institute_id"=>"pt_500",
             "district"=>"Coimbra",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.uc.pt/iii",
             "email"=>"iii@ci.uc.pt",
             "domain"=>"@ci.uc.pt",
             "phone"=>239480066
            ));
            School::create(array(
             "name"=>"Universidade de Coimbra - Instituto de Investigação Interdisciplinar",
             "dependent_institute_id"=>"pt_500",
             "district"=>"Coimbra",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.uc.pt/iii",
             "email"=>"iii@ci.uc.pt",
             "domain"=>"@ci.uc.pt",
             "phone"=>239723895
            ));
            School::create(array(
             "name"=>"Universidade de Évora",
             "district"=>"Évora",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.uevora.pt",
             "email"=>"garp@uevora.pt",
             "domain"=>"@uevora.pt",
             "phone"=>"266740800, 266740801"
            ));
            School::create(array(
             "name"=>"Universidade de Évora - Escola de Artes",
             "dependent_institute_id"=>"pt_600",
             "district"=>"Évora",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.uevora.pt/estrutura/unidades_organicas",
             "email"=>"director@ea.uevora.pt",
             "domain"=>"@ea.uevora.pt",
             "phone"=>266760260
            ));
            School::create(array(
             "name"=>"Universidade de Évora - Escola de Ciências e Tecnologia",
             "dependent_institute_id"=>"pt_600",
             "district"=>"Évora",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.uevora.pt/estrutura/unidades_organicas",
             "email"=>"director@ect.uevora.pt",
             "domain"=>"@ect.uevora.pt",
             "phone"=>266740800
            ));
            School::create(array(
             "name"=>"Universidade de Évora - Escola de Ciências Sociais",
             "dependent_institute_id"=>"pt_600",
             "district"=>"Évora",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.uevora.pt/estrutura/unidades_organicas",
             "email"=>"director@ecs.uevora.pt",
             "domain"=>"@ecs.uevora.pt",
             "phone"=>266740800
            ));
            School::create(array(
             "name"=>"Universidade de Évora - Escola Superior de Enfermagem de São João de Deus",
             "dependent_institute_id"=>"pt_600",
             "district"=>"Évora",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.esesjd.uevora.pt",
             "email"=>"esesjd@uevora.pt",
             "domain"=>"@uevora.pt",
             "phone"=>266730300
            ));
            School::create(array(
             "name"=>"Universidade de Évora - Instituto de Investigação e Formação Avançada",
             "dependent_institute_id"=>"pt_600",
             "district"=>"Évora",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.uevora.pt/estrutura/unidades_organicas/iifa",
             "email"=>"iifa@uevora.pt",
             "domain"=>"@uevora.pt",
             "phone"=>266759350
            ));
            School::create(array(
             "name"=>"Universidade de Lisboa",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ul.pt",
             "email"=>"reitoria@reitoria.ul.pt",
             "domain"=>"@reitoria.ul.pt",
             "phone"=>210113400
            ));
            School::create(array(
             "name"=>"Universidade de Lisboa - Faculdade de Belas-Artes",
             "dependent_institute_id"=>"pt_700",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.fba.ul.pt",
             "email"=>"info@fba.ul.pt",
             "domain"=>"@fba.ul.pt",
             "phone"=>213252100
            ));
            School::create(array(
             "name"=>"Universidade de Lisboa - Faculdade de Ciências",
             "dependent_institute_id"=>"pt_700",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.fc.ul.pt",
             "email"=>"info.fcul@fc.ul.pt",
             "domain"=>"@fc.ul.pt",
             "phone"=>217500000
            ));
            School::create(array(
             "name"=>"Universidade de Lisboa - Faculdade de Direito",
             "dependent_institute_id"=>"pt_700",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.fd.ul.pt",
             "email"=>"webmaster@mail.fd.ul.pt",
             "domain"=>"@mail.fd.ul.pt",
             "phone"=>217984600
            ));
            School::create(array(
             "name"=>"Universidade de Lisboa - Faculdade de Farmácia",
             "dependent_institute_id"=>"pt_700",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ff.ul.pt",
             "email"=>"expediente@ff.ul.pt",
             "domain"=>"@ff.ul.pt",
             "phone"=>217946400
            ));
            School::create(array(
             "name"=>"Universidade de Lisboa - Faculdade de Letras",
             "dependent_institute_id"=>"pt_700",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.fl.ul.pt",
             "email"=>"flul.informacoes@fl.ul.pt",
             "domain"=>"@fl.ul.pt",
             "phone"=>217920000
            ));
            School::create(array(
             "name"=>"Universidade de Lisboa - Faculdade de Medicina",
             "dependent_institute_id"=>"pt_700",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.fm.ul.pt",
             "email"=>"fml@fm.ul.pt",
             "domain"=>"@fm.ul.pt",
             "phone"=>217985100
            ));
            School::create(array(
             "name"=>"Universidade de Lisboa - Faculdade de Medicina Dentária",
             "dependent_institute_id"=>"pt_700",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.fmd.ul.pt",
             "email"=>"correio@fmd.ul.pt",
             "domain"=>"@fmd.ul.pt",
             "phone"=>217922600
            ));
            School::create(array(
             "name"=>"Universidade de Lisboa - Faculdade de Psicologia",
             "dependent_institute_id"=>"pt_700",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.fpce.ul.pt",
             "email"=>"geral@fpce.ul.pt",
             "domain"=>"@fpce.ul.pt",
             "phone"=>217943600
            ));
            School::create(array(
             "name"=>"Universidade de Lisboa - Instituto de Ciências Sociais",
             "dependent_institute_id"=>"pt_700",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ics.ul.pt",
             "email"=>"instituto.ciencias.sociais@ics.ul.pt",
             "domain"=>"@ics.ul.pt",
             "phone"=>217935000
            ));
            School::create(array(
             "name"=>"Universidade de Lisboa - Instituto de Educação",
             "dependent_institute_id"=>"pt_700",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ie.ul.pt",
             "email"=>"ci@ie.ul.pt",
             "domain"=>"@ie.ul.pt",
             "phone"=>217943633
            ));
            School::create(array(
             "name"=>"Universidade de Lisboa - Instituto de Geografia e Ordenamento do Território",
             "dependent_institute_id"=>"pt_700",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.igot.ul.pt",
             "email"=>"igot@fl.ul.pt",
             "domain"=>"@fl.ul.pt",
             "phone"=>217920000
            ));
            School::create(array(
             "name"=>"Universidade de Trás-os-Montes e Alto Douro",
             "district"=>"Vila Real",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.utad.pt",
             "email"=>"utad@utad.pt",
             "domain"=>"@utad.pt",
             "phone"=>259350000
            ));
            School::create(array(
             "name"=>"Universidade de Trás-os-Montes e Alto Douro - Escola de Ciências Agrárias e Veterinárias",
             "dependent_institute_id"=>"pt_1200",
             "district"=>"Vila Real",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.utad.pt/pt/escolas/ecav/index.html",
             "email"=>"geralecav@utad.pt",
             "domain"=>"@utad.pt",
             "phone"=>259330473
            ));
            School::create(array(
             "name"=>"Universidade de Trás-os-Montes e Alto Douro - Escola de Ciências da Vida e do Ambiente",
             "dependent_institute_id"=>"pt_1200",
             "district"=>"Vila Real",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.utad.pt/pt/escolas/ecva/index.html",
             "email"=>"fontain@utad.pt",
             "domain"=>"@utad.pt",
             "phone"=>"259350230, 259350246"
            ));
            School::create(array(
             "name"=>"Universidade de Trás-os-Montes e Alto Douro - Escola de Ciências e Tecnologia",
             "dependent_institute_id"=>"pt_1200",
             "district"=>"Vila Real",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.utad.pt/pt/escolas/ect/index.html",
             "email"=>"presidencia-ect@utad.htlm",
             "domain"=>"@utad.htlm",
             "phone"=>259350326
            ));
            School::create(array(
             "name"=>"Universidade de Trás-os-Montes e Alto Douro - Escola de Ciências Humanas e Sociais",
             "dependent_institute_id"=>"pt_1200",
             "district"=>"Vila Real",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.utad.pt/pt/escolas/echs/index.html",
             "email"=>"echesweb@utad.pt",
             "domain"=>"@utad.pt",
             "phone"=>259330125
            ));
            School::create(array(
             "name"=>"Universidade de Trás-os-Montes e Alto Douro - Escola de Ciências Humanas e Sociais (Chaves)",
             "dependent_institute_id"=>"pt_1200",
             "district"=>"Vila Real",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.utad.pt/pt/escolas/echs/index.html",
             "email"=>"utadchaves@utad.pt",
             "domain"=>"@utad.pt",
             "phone"=>276903300
            ));
            School::create(array(
             "name"=>"Universidade de Trás-os-Montes e Alto Douro - Escola Superior de Enfermagem de Vila Real",
             "dependent_institute_id"=>"pt_1200",
             "district"=>"Vila Real",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.esevr.pt",
             "email"=>"secretariado.esenf@utad.pt",
             "domain"=>"@utad.pt",
             "phone"=>259309530
            ));
            School::create(array(
             "name"=>"Universidade do Algarve",
             "district"=>"Faro",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ualg.pt",
             "email"=>"gre@ualg.pt",
             "domain"=>"@ualg.pt",
             "phone"=>"289800100, 289800900"
            ));
            School::create(array(
             "name"=>"Universidade do Algarve - Escola Superior de Educação e Comunicação de Faro",
             "dependent_institute_id"=>"pt_200",
             "district"=>"Faro",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ualg.pt/ese",
             "email"=>"cdese@ualg.pt",
             "domain"=>"@ualg.pt",
             "phone"=>"289800000, 289803561"
            ));
            School::create(array(
             "name"=>"Universidade do Algarve - Escola Superior de Gestão, Hotelaria e Turismo de Faro",
             "dependent_institute_id"=>"pt_200",
             "district"=>"Faro",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ualg.pt/esght",
             "email"=>"cdesght@ualg.pt",
             "domain"=>"@ualg.pt",
             "phone"=>"289800136, 289800137"
            ));
            School::create(array(
             "name"=>"Universidade do Algarve - Escola Superior de Gestão, Hotelaria e Turismo de Faro (Portimão)",
             "dependent_institute_id"=>"pt_200",
             "district"=>"Faro",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ualg.pt/esght",
             "email"=>"cdesght@ualg.pt",
             "domain"=>"@ualg.pt",
             "phone"=>"282417641, 282418036"
            ));
            School::create(array(
             "name"=>"Universidade do Algarve - Escola Superior de Saúde de Faro",
             "dependent_institute_id"=>"pt_200",
             "district"=>"Faro",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ualg.pt",
             "email"=>"cdessaf@ualg.pt",
             "domain"=>"@ualg.pt",
             "phone"=>289895300
            ));
            School::create(array(
             "name"=>"Universidade do Algarve - Faculdade de Ciências e Tecnologia",
             "dependent_institute_id"=>"pt_200",
             "district"=>"Faro",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ualg.pt/fct",
             "email"=>"cdfct@ualg.pt",
             "domain"=>"@ualg.pt",
             "phone"=>289800905
            ));
            School::create(array(
             "name"=>"Universidade do Algarve - Faculdade de Ciências Humanas e Sociais",
             "dependent_institute_id"=>"pt_200",
             "district"=>"Faro",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ualg.pt",
             "email"=>"cdfchs@ualg.pt",
             "domain"=>"@ualg.pt",
             "phone"=>289800914
            ));
            School::create(array(
             "name"=>"Universidade do Algarve - Faculdade de Economia",
             "dependent_institute_id"=>"pt_200",
             "district"=>"Faro",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ualg.pt/feua",
             "email"=>"cdfeua@ualg.pt",
             "domain"=>"@ualg.pt",
             "phone"=>289800915
            ));
            School::create(array(
             "name"=>"Universidade do Algarve - Instituto Superior de Engenharia de Faro",
             "dependent_institute_id"=>"pt_200",
             "district"=>"Faro",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ualg.pt/est",
             "email"=>"cdest@ualg.pt",
             "domain"=>"@ualg.pt",
             "phone"=>289800124
            ));
            School::create(array(
             "name"=>"Universidade do Minho",
             "district"=>"Braga",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.uminho.pt",
             "email"=>"sec-agr@reitoria.uminho.pt",
             "domain"=>"@reitoria.uminho.pt",
             "phone"=>253601100
            ));
            School::create(array(
             "name"=>"Universidade do Minho - Escola Superior de Enfermagem de Calouste Gulbenkian",
             "dependent_institute_id"=>"pt_1000",
             "district"=>"Braga",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "email"=>"expediente@ese.uminho.pt",
             "domain"=>"@ese.uminho.pt",
             "phone"=>"253601300; 253601322"
            ));
            School::create(array(
             "name"=>"Universidade do Porto",
             "district"=>"Porto",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.up.pt",
             "email"=>"grp@reit.up.pt",
             "domain"=>"@reit.up.pt",
             "phone"=>220408000
            ));
            School::create(array(
             "name"=>"Universidade do Porto - Escola de Gestão do Porto",
             "dependent_institute_id"=>"pt_1100",
             "district"=>"Porto",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.egp.up.pt",
             "email"=>"secretariado@egp.up.pt",
             "domain"=>"@egp.up.pt",
             "phone"=>"226153270, 226188699"
            ));
            School::create(array(
             "name"=>"Universidade do Porto - Faculdade de Arquitectura",
             "dependent_institute_id"=>"pt_1100",
             "district"=>"Porto",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.fa.up.pt",
             "email"=>"sre@arq.up.pt",
             "domain"=>"@arq.up.pt",
             "phone"=>226057100
            ));
            School::create(array(
             "name"=>"Universidade do Porto - Faculdade de Belas-Artes",
             "dependent_institute_id"=>"pt_1100",
             "district"=>"Porto",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.fba.up.pt",
             "email"=>"directivo@fba.up.pt",
             "domain"=>"@fba.up.pt",
             "phone"=>225192400
            ));
            School::create(array(
             "name"=>"Universidade do Porto - Faculdade de Ciências",
             "dependent_institute_id"=>"pt_1100",
             "district"=>"Porto",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.fc.up.pt",
             "email"=>"fcup@fc.up.pt",
             "domain"=>"@fc.up.pt",
             "phone"=>220402009
            ));
            School::create(array(
             "name"=>"Universidade do Porto - Faculdade de Ciências da Nutrição e Alimentação",
             "dependent_institute_id"=>"pt_1100",
             "district"=>"Porto",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.fcna.up.pt",
             "email"=>"directivo@fcna.up.pt",
             "domain"=>"@fcna.up.pt",
             "phone"=>225074320
            ));
            School::create(array(
             "name"=>"Universidade do Porto - Faculdade de Desporto",
             "dependent_institute_id"=>"pt_1100",
             "district"=>"Porto",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.fcdef.up.pt",
             "email"=>"expediente@fcdef.up.pt",
             "domain"=>"@fcdef.up.pt",
             "phone"=>225074700
            ));
            School::create(array(
             "name"=>"Universidade do Porto - Faculdade de Direito",
             "dependent_institute_id"=>"pt_1100",
             "district"=>"Porto",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.fd.up.pt",
             "email"=>"fdup@direito.up.pt",
             "domain"=>"@direito.up.pt",
             "phone"=>222041600
            ));
            School::create(array(
             "name"=>"Universidade do Porto - Faculdade de Economia",
             "dependent_institute_id"=>"pt_1100",
             "district"=>"Porto",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.fep.up.pt",
             "email"=>"gre@fep.up.pt",
             "domain"=>"@fep.up.pt",
             "phone"=>225571100
            ));
            School::create(array(
             "name"=>"Universidade do Porto - Faculdade de Engenharia",
             "dependent_institute_id"=>"pt_1100",
             "district"=>"Porto",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.fe.up.pt",
             "email"=>"spregrad@fep.up.pt",
             "domain"=>"@fep.up.pt",
             "phone"=>225081400
            ));
            School::create(array(
             "name"=>"Universidade do Porto - Faculdade de Farmácia",
             "dependent_institute_id"=>"pt_1100",
             "district"=>"Porto",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ff.up.pt",
             "email"=>"ffup@ff.up.pt",
             "domain"=>"@ff.up.pt",
             "phone"=>"222002564, 222078900"
            ));
            School::create(array(
             "name"=>"Universidade do Porto - Faculdade de Letras",
             "dependent_institute_id"=>"pt_1100",
             "district"=>"Porto",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.letras.up.pt",
             "email"=>"flup@letras.up.pt",
             "domain"=>"@letras.up.pt",
             "phone"=>"226077100, 226077162"
            ));
            School::create(array(
             "name"=>"Universidade do Porto - Faculdade de Medicina",
             "dependent_institute_id"=>"pt_1100",
             "district"=>"Porto",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.med.up.pt",
             "email"=>"fmup@med.up.pt",
             "domain"=>"@med.up.pt",
             "phone"=>225513600
            ));
            School::create(array(
             "name"=>"Universidade do Porto - Faculdade de Medicina Dentária",
             "dependent_institute_id"=>"pt_1100",
             "district"=>"Porto",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.fmd.up.pt",
             "email"=>"webmaster@fmd.up.pt",
             "domain"=>"@fmd.up.pt",
             "phone"=>220901100
            ));
            School::create(array(
             "name"=>"Universidade do Porto - Faculdade de Psicologia e de Ciências da Educação",
             "dependent_institute_id"=>"pt_1100",
             "district"=>"Porto",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.fpce.up.pt",
             "email"=>"fpce@psi.up.pt",
             "domain"=>"@psi.up.pt",
             "phone"=>226079700
            ));
            School::create(array(
             "name"=>"Universidade do Porto - Instituto de Ciências Biomédicas de Abel Salazar",
             "dependent_institute_id"=>"pt_1100",
             "district"=>"Porto",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.icbas.up.pt",
             "email"=>"info@icbas.up.pt",
             "domain"=>"@icbas.up.pt",
             "phone"=>222062200
            ));
            School::create(array(
             "name"=>"Universidade dos Açores",
             "district"=>"R. A. Açores",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.uac.pt",
             "email"=>"uac@notes.uac.pt",
             "domain"=>"@notes.uac.pt",
             "phone"=>296650000
            ));
            School::create(array(
             "name"=>"Universidade dos Açores - Angra do Heroísmo",
             "dependent_institute_id"=>"pt_100",
             "district"=>"R. A. Açores",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.angra.uac.pt",
             "email"=>"ddca@notes.angra.uac.pt",
             "domain"=>"@notes.angra.uac.pt",
             "phone"=>295402200
            ));
            School::create(array(
             "name"=>"Universidade dos Açores - Escola Superior de Enfermagem de Angra do Heroísmo",
             "dependent_institute_id"=>"pt_100",
             "district"=>"R. A. Açores",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.esenfah.uac.pt",
             "email"=>"ESEnfAH@ESEnfAH.pt",
             "domain"=>"@ESEnfAH.pt",
             "phone"=>295204400
            ));
            School::create(array(
             "name"=>"Universidade dos Açores - Escola Superior de Enfermagem de Ponta Delgada",
             "dependent_institute_id"=>"pt_100",
             "district"=>"R. A. Açores",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.esepd.pt",
             "email"=>"info@esepd.pt",
             "domain"=>"@esepd.pt",
             "phone"=>296302280
            ));
            School::create(array(
             "name"=>"Universidade dos Açores - Horta",
             "dependent_institute_id"=>"pt_100",
             "district"=>"R. A. Açores",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.dop.uac.pt/",
             "email"=>"ddop@uac.pt",
             "domain"=>"@uac.pt",
             "phone"=>292200400
            ));
            School::create(array(
             "name"=>"Universidade dos Açores - Ponta Delgada",
             "dependent_institute_id"=>"pt_100",
             "district"=>"R. A. Açores",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.uac.pt",
             "email"=>"dsa@notes.uac.pt",
             "domain"=>"@notes.uac.pt",
             "phone"=>296650000
            ));
            School::create(array(
             "name"=>"Universidade Fernando Pessoa",
             "district"=>"Porto",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ufp.pt",
             "email"=>"geral@ufp.pt",
             "domain"=>"@ufp.pt",
             "phone"=>225071300
            ));
            School::create(array(
             "name"=>"Universidade Fernando Pessoa (unidade de Ponte de Lima - ensino politécnico)",
             "dependent_institute_id"=>"pt_2750",
             "district"=>"Viana do Castelo",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ufp.pt",
             "email"=>"geral-plima@ufp.pt",
             "domain"=>"@ufp.pt",
             "phone"=>258741026
            ));
            School::create(array(
             "name"=>"Universidade Fernando Pessoa (unidade de Ponte de Lima)",
             "dependent_institute_id"=>"pt_2750",
             "district"=>"Viana do Castelo",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ufp.pt",
             "email"=>"geral-plima@ufp.pt",
             "domain"=>"@ufp.pt",
             "phone"=>258741026
            ));
            School::create(array(
             "name"=>"Universidade Fernando Pessoa - Escola Superior de Saúde",
             "dependent_institute_id"=>"pt_2750",
             "district"=>"Porto",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "email"=>"geral@ufp.pt",
             "domain"=>"@ufp.pt",
             "phone"=>225071300
            ));
            School::create(array(
             "name"=>"Universidade Lusíada",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.lis.ulusiada.pt",
             "email"=>"info@lis.ulusiada.pt",
             "domain"=>"@lis.ulusiada.pt",
             "phone"=>213611500
            ));
            School::create(array(
             "name"=>"Universidade Lusíada (Porto)",
             "district"=>"Porto",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ulusiada.pt",
             "email"=>"info@por.ulusiada.pt",
             "domain"=>"@por.ulusiada.pt",
             "phone"=>225570800
            ));
            School::create(array(
             "name"=>"Universidade Lusíada de Vila Nova de Famalicão",
             "district"=>"Braga",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ulusiada.pt",
             "email"=>"info@fam.ulusiada.pt",
             "domain"=>"@fam.ulusiada.pt",
             "phone"=>252309200
            ));
            School::create(array(
             "name"=>"Universidade Lusófona de Humanidades e Tecnologias",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ulusofona.pt",
             "email"=>"informacoes@ulusofona.pt",
             "domain"=>"@ulusofona.pt",
             "phone"=>217515500
            ));
            School::create(array(
             "name"=>"Universidade Lusófona do Porto",
             "district"=>"Porto",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ulp.pt",
             "email"=>"informacoes@ulp.pt",
             "domain"=>"@ulp.pt",
             "phone"=>222073230
            ));
            School::create(array(
             "name"=>"Universidade Nova de Lisboa",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.unl.pt",
             "email"=>"runl.ni@mail.telepac.pt.",
             "domain"=>"@mail.telepac.pt.",
             "phone"=>213715600
            ));
            School::create(array(
             "name"=>"Universidade Nova de Lisboa - Escola Nacional de Saúde Pública",
             "dependent_institute_id"=>"pt_900",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ensp.unl.pt",
             "email"=>"ensp@ensp.unl.pt",
             "domain"=>"@ensp.unl.pt",
             "phone"=>217512100
            ));
            School::create(array(
             "name"=>"Universidade Nova de Lisboa - Faculdade de Ciências e Tecnologia",
             "dependent_institute_id"=>"pt_900",
             "district"=>"Setúbal",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.fct.unl.pt",
             "email"=>"gre@mail.fct.unl.pt",
             "domain"=>"@mail.fct.unl.pt",
             "phone"=>"212948300, 212948500"
            ));
            School::create(array(
             "name"=>"Universidade Nova de Lisboa - Faculdade de Ciências Médicas",
             "dependent_institute_id"=>"pt_900",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.fcm.unl.pt",
             "email"=>"geral@fcm.unl.pt",
             "domain"=>"@fcm.unl.pt",
             "phone"=>"218803000, 218853000"
            ));
            School::create(array(
             "name"=>"Universidade Nova de Lisboa - Faculdade de Ciências Sociais e Humanas",
             "dependent_institute_id"=>"pt_900",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.fcsh.unl.pt",
             "email"=>"director@fcsh.unl.pt",
             "domain"=>"@fcsh.unl.pt",
             "phone"=>"217908300, 217908334"
            ));
            School::create(array(
             "name"=>"Universidade Nova de Lisboa - Faculdade de Direito",
             "dependent_institute_id"=>"pt_900",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.fd.unl.pt",
             "email"=>"map@fd.unl.pt",
             "domain"=>"@fd.unl.pt",
             "phone"=>213847400
            ));
            School::create(array(
             "name"=>"Universidade Nova de Lisboa - Faculdade de Economia",
             "dependent_institute_id"=>"pt_900",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.fe.unl.pt",
             "email"=>"sacad@fe.unl.pt",
             "domain"=>"@fe.unl.pt",
             "phone"=>213801600
            ));
            School::create(array(
             "name"=>"Universidade Nova de Lisboa - Instituto de Higiene e Medicina Tropical",
             "dependent_institute_id"=>"pt_900",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ihmt.unl.pt",
             "email"=>"jvcosta@ihmt.unl.pt",
             "domain"=>"@ihmt.unl.pt",
             "phone"=>213652600
            ));
            School::create(array(
             "name"=>"Universidade Nova de Lisboa - Instituto de Tecnologia Química e Biológica",
             "dependent_institute_id"=>"pt_900",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.itqb.unl.pt",
             "email"=>"secdir@itqb.unl.pt",
             "domain"=>"@itqb.unl.pt",
             "phone"=>"214469100, 214469318"
            ));
            School::create(array(
             "name"=>"Universidade Nova de Lisboa - Instituto Superior de Estatística e Gestão de Informação",
             "dependent_institute_id"=>"pt_900",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.isegi.unl.pt",
             "email"=>"info@isegi.unl.pt",
             "domain"=>"@isegi.unl.pt",
             "phone"=>"213870413, 213871573"
            ));
            School::create(array(
             "name"=>"Universidade Portucalense Infante D. Henrique",
             "district"=>"Porto",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.uportu.pt",
             "email"=>"up@uportu.pt",
             "domain"=>"@uportu.pt",
             "phone"=>"225572641, 225572642"
            ));
            School::create(array(
             "name"=>"Universidade Técnica de Lisboa",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.utl.pt",
             "email"=>"rutl@reitoria.utl.pt",
             "domain"=>"@reitoria.utl.pt",
             "phone"=>218811900
            ));
            School::create(array(
             "name"=>"Universidade Técnica de Lisboa - Faculdade de Arquitectura",
             "dependent_institute_id"=>"pt_800",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.fa.utl.pt",
             "email"=>"geral@fa.utl.pt",
             "domain"=>"@fa.utl.pt",
             "phone"=>213615000
            ));
            School::create(array(
             "name"=>"Universidade Técnica de Lisboa - Faculdade de Medicina Veterinária",
             "dependent_institute_id"=>"pt_800",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.fmv.utl.pt",
             "email"=>"fmv@fmv.utl.pt",
             "domain"=>"@fmv.utl.pt",
             "phone"=>"213522591, 213652800"
            ));
            School::create(array(
             "name"=>"Universidade Técnica de Lisboa - Faculdade de Motricidade Humana",
             "dependent_institute_id"=>"pt_800",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.fmh.utl.pt",
             "email"=>"fmh@fmh.utl.pt",
             "domain"=>"@fmh.utl.pt",
             "phone"=>"214196664, 214196777"
            ));
            School::create(array(
             "name"=>"Universidade Técnica de Lisboa - Instituto Superior de Agronomia",
             "dependent_institute_id"=>"pt_800",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.isa.utl.pt",
             "email"=>"cdisa@isa.utl.pt",
             "domain"=>"@isa.utl.pt",
             "phone"=>213653100
            ));
            School::create(array(
             "name"=>"Universidade Técnica de Lisboa - Instituto Superior de Ciências Sociais e Políticas",
             "dependent_institute_id"=>"pt_800",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.iscsp.utl.pt",
             "email"=>"iscsp@iscsp.utl.pt",
             "domain"=>"@iscsp.utl.pt",
             "phone"=>213619430
            ));
            School::create(array(
             "name"=>"Universidade Técnica de Lisboa - Instituto Superior de Economia e Gestão",
             "dependent_institute_id"=>"pt_800",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.iseg.utl.pt",
             "email"=>"spg@iseg.utl.pt",
             "domain"=>"@iseg.utl.pt",
             "phone"=>213925800
            ));
            School::create(array(
             "name"=>"Universidade Técnica de Lisboa - Instituto Superior Técnico",
             "dependent_institute_id"=>"pt_800",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ist.utl.pt",
             "email"=>"sgraduacao@ist.utl.pt",
             "domain"=>"@ist.utl.pt",
             "phone"=>218417000
            ));
            School::create(array(
             "name"=>"Universidade Técnica de Lisboa - Instituto Superior Técnico (instalações no Tagus Park)",
             "dependent_institute_id"=>"pt_800",
             "district"=>"Lisboa",
             "country"=>"pt",
             "skip_email_validation"=>true,
             "website"=>"http://www.ist.utl.pt",
             "email"=>"guilherme.arroz@tagus.ist.utl.pt",
             "domain"=>"@tagus.ist.utl.pt",
             "phone"=>"214226900, 214233200"
            ));
    }
}
