<?php

namespace Database\Seeders;

use App\Models\CompanyEstablishments;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanyEstablishmentsSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        CompanyEstablishments::create(['cod_unidade_cnes' => 2682303, 'no_unidade' => 'AME Caiuca Ambulatorio Multiprofissional Especializado', 'ft_unidade' => 'ame caiuca ambulatorio multiprofissional especializado', 'end_logradouro' => 'Av Leao Dourado', 'end_numero' => '1248', 'end_bairro' => 'Vila Kennedy', 'cidade_id' => '2604106', 'end_latitude' => '-82862536', 'end_longitude' => '-359923311977', 'tipo_estabelecimento_id' => 36, 'nivel_atencao_id' => 2,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 3105563, 'no_unidade' => 'AME Diagnostico', 'ft_unidade' => 'ame diagnostico', 'end_logradouro' => 'Rua Djalma Dutra', 'end_numero' => 'S/N', 'end_bairro' => 'Nossa das Senhora das Dores', 'cidade_id' => '2604106', 'end_latitude' => '-82883905', 'end_longitude' => '-359767625', 'tipo_estabelecimento_id' => 39, 'nivel_atencao_id' => 2,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 3020932, 'no_unidade' => 'AME Fernando Lyra', 'ft_unidade' => 'ame fernando lyra', 'end_logradouro' => 'Rua Dep Magalhaes R07', 'end_numero' => 'S/N', 'end_bairro' => 'Sao Joao da Escocia', 'cidade_id' => '2604106', 'end_latitude' => '-82694330941', 'end_longitude' => '-359571576118', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 9070532, 'no_unidade' => 'AME Infantojuvenil', 'ft_unidade' => 'ame infantojuvenil', 'end_logradouro' => 'Rua General Dionisio Siqueira Porto', 'end_numero' => '709', 'end_bairro' => 'Mauricio de Nassau', 'cidade_id' => '2604106', 'end_latitude' => '-8268063462', 'end_longitude' => '-359712553024', 'tipo_estabelecimento_id' => 36, 'nivel_atencao_id' => 2,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 9415610, 'no_unidade' => 'AME Luiz Bezerra Torres', 'ft_unidade' => 'ame luiz bezerra torres', 'end_logradouro' => 'Rua Gerbera', 'end_numero' => '18717', 'end_bairro' => 'Nossa Senhora das Graças', 'cidade_id' => '2604106', 'end_latitude' => '-82974511116', 'end_longitude' => '-360450053215', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 7484747, 'no_unidade' => 'AME Maria Lira Morada Nova Rendeiras', 'ft_unidade' => 'ame maria lira morada nova rendeiras', 'end_logradouro' => 'Rua Francisco Maximiniano', 'end_numero' => 'S/N', 'end_bairro' => 'Rendeiras', 'cidade_id' => '2604106', 'end_latitude' => '-82791265558', 'end_longitude' => '-359208726883', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 2682532, 'no_unidade' => 'AME Pedro Justino Rodrigues UBS Kennedy II Padre Inacio', 'ft_unidade' => 'ame pedro justino rodrigues ubs kennedy ii padre inacio', 'end_logradouro' => 'Rua Joaquim Alves Souza E 08', 'end_numero' => 'S/N', 'end_bairro' => 'Vila Kennedy', 'cidade_id' => '2604106', 'end_latitude' => '-82848968658', 'end_longitude' => '-359974068403', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 2345722, 'no_unidade' => 'AME Pedro Justino Rodrigues UBS Padre Inacio Kennedy II', 'ft_unidade' => 'ame pedro justino rodrigues ubs padre inacio kennedy ii', 'end_logradouro' => 'Rua Alcione de Alburquerque', 'end_numero' => '11', 'end_bairro' => 'Sol Poente', 'cidade_id' => '2604106', 'end_latitude' => '-82805492344', 'end_longitude' => '-359957170486', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 6563317, 'no_unidade' => 'AME Saude da Mulher', 'ft_unidade' => 'ame saude da mulher', 'end_logradouro' => 'Rua Rodrigues de Abreu', 'end_numero' => '232', 'end_bairro' => 'Mauricio de Nassau', 'cidade_id' => '2604106', 'end_latitude' => '-82735212', 'end_longitude' => '-359735054', 'tipo_estabelecimento_id' => 36, 'nivel_atencao_id' => 2,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 2682273, 'no_unidade' => 'AME Saude do Idoso', 'ft_unidade' => 'ame saude do idoso', 'end_logradouro' => 'Rua Coronel Limeira', 'end_numero' => '211', 'end_bairro' => 'Nossa Senhora das Dores', 'cidade_id' => '2604106', 'end_latitude' => '-81693275', 'end_longitude' => '-362011179', 'tipo_estabelecimento_id' => 36, 'nivel_atencao_id' => 2,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 7612621, 'no_unidade' => 'Caps AD III Mandacaru', 'ft_unidade' => 'caps ad iii mandacaru', 'end_logradouro' => 'Rua Rio Formoso', 'end_numero' => 'S/N', 'end_bairro' => 'Boa Vista II', 'cidade_id' => '2604106', 'end_latitude' => '-82706744', 'end_longitude' => '-359884398', 'tipo_estabelecimento_id' => 70, 'nivel_atencao_id' => 2,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 8016313, 'no_unidade' => 'Caps Crescendo Com Dignidade', 'ft_unidade' => 'caps crescendo com dignidade', 'end_logradouro' => 'Rua Rio Formoso', 'end_numero' => 'S/N', 'end_bairro' => 'Boa Vista II', 'cidade_id' => '2604106', 'end_latitude' => '-82706646972', 'end_longitude' => '-359881854057', 'tipo_estabelecimento_id' => 70, 'nivel_atencao_id' => 2,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 7594658, 'no_unidade' => 'Central de Abastecimento Farmaceutico de Caruaru', 'ft_unidade' => 'central de abastecimento farmaceutico de caruaru', 'end_logradouro' => 'Av Vera Cruz', 'end_numero' => '654', 'end_bairro' => 'Sao Francisco', 'cidade_id' => '2604106', 'end_latitude' => '-82883844914', 'end_longitude' => '-359802246094', 'tipo_estabelecimento_id' => 43, 'nivel_atencao_id' => 2,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 2819260, 'no_unidade' => 'Central de Regulacao de Assistencia a Saude', 'ft_unidade' => 'central de regulacao de assistencia a saude', 'end_logradouro' => 'Rua Martin Afonso', 'end_numero' => '267', 'end_bairro' => 'Sao Francisco', 'cidade_id' => '2604106', 'end_latitude' => '-82916544441', 'end_longitude' => '-359801387787', 'tipo_estabelecimento_id' => 81, 'nivel_atencao_id' => 1,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 3932494, 'no_unidade' => 'Centro de Referencia de Saude do Trabalhador', 'ft_unidade' => 'centro de referencia de saude do trabalhador', 'end_logradouro' => 'Rua Coronel Limeira', 'end_numero' => '211', 'end_bairro' => 'Nossa Senhora das Dores', 'cidade_id' => '2604106', 'end_latitude' => '-81693275', 'end_longitude' => '-362011179', 'tipo_estabelecimento_id' => 36, 'nivel_atencao_id' => 1,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 2345579, 'no_unidade' => 'Centro de Saude Amelia de Pontes', 'ft_unidade' => 'centro de saude amelia de pontes', 'end_logradouro' => 'Rua dos Guararapes', 'end_numero' => 'S/N', 'end_bairro' => 'Centro', 'cidade_id' => '2604106', 'end_latitude' => '-82872378782', 'end_longitude' => '-359680366516', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 2345927, 'no_unidade' => 'Centro de Saude Ana Rodrigues', 'ft_unidade' => 'centro de saude ana rodrigues', 'end_logradouro' => 'Rua Martin Afonso', 'end_numero' => '267', 'end_bairro' => 'Sao Francisco', 'cidade_id' => '2604106', 'end_latitude' => '-8291590744', 'end_longitude' => '-359798598289', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 2345587, 'no_unidade' => 'Centro de Saude Boa Vista', 'ft_unidade' => 'centro de saude boa vista', 'end_logradouro' => 'Rua Cabo', 'end_numero' => 'S/N', 'end_bairro' => 'Boa Vista', 'cidade_id' => '2604106', 'end_latitude' => '-8275952053', 'end_longitude' => '-359880030155', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 2345803, 'no_unidade' => 'Centro de Saude Cedro', 'ft_unidade' => 'c s cedro', 'end_logradouro' => 'Rua R 8', 'end_numero' => '24', 'end_bairro' => 'Cidade Jardim', 'cidade_id' => '2604106', 'end_latitude' => '-82763714285', 'end_longitude' => '-359419548512', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 2345595, 'no_unidade' => 'Centro de Saude Indianopolis', 'ft_unidade' => 'centro de saude indianopolis', 'end_logradouro' => 'Rua Alferes Jorge', 'end_numero' => 'S/N', 'end_bairro' => 'Indianopolis', 'cidade_id' => '2604106', 'end_latitude' => '-82877755', 'end_longitude' => '-359638745', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 9037306, 'no_unidade' => 'Centro de Zoonoses de Caruaru', 'ft_unidade' => 'centro de zoonoses de caruaru', 'end_logradouro' => 'Rua Sao Sebastiao', 'end_numero' => 'S/N', 'end_bairro' => 'Alto do Moura', 'cidade_id' => '2604106', 'end_latitude' => '-82850216139', 'end_longitude' => '-360003277659', 'tipo_estabelecimento_id' => 50, 'nivel_atencao_id' => 4,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 7717342, 'no_unidade' => 'Centro Municipal de Especialidades Medicas II', 'ft_unidade' => 'centro municipal de especialidades medicas ii', 'end_logradouro' => 'Av Dom Bosco', 'end_numero' => '143', 'end_bairro' => 'Mauricio de Nassau', 'cidade_id' => '2604106', 'end_latitude' => '', 'end_longitude' => '', 'tipo_estabelecimento_id' => 36, 'nivel_atencao_id' => 2,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 3083748, 'no_unidade' => 'CEO Municipal Tipo III', 'ft_unidade' => 'ceo municipal tipo iii', 'end_logradouro' => 'Rua Martim Afonso', 'end_numero' => '267', 'end_bairro' => 'Sao Francisco', 'cidade_id' => '2604106', 'end_latitude' => '-82916756775', 'end_longitude' => '-359800100327', 'tipo_estabelecimento_id' => 36, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 2345986, 'no_unidade' => 'CTA Centro de Testagem e Aconselhamento', 'ft_unidade' => 'cta centro de testagem e aconselhamento', 'end_logradouro' => 'Rua Cel Limeira', 'end_numero' => '189', 'end_bairro' => 'Centro', 'cidade_id' => '2604106', 'end_latitude' => '-82843925642', 'end_longitude' => '-359681224823', 'tipo_estabelecimento_id' => 36, 'nivel_atencao_id' => 2,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 4059085, 'no_unidade' => 'EAP Sao Francisco I e II', 'ft_unidade' => 'eap sao francisco i e ii', 'end_logradouro' => 'Rua Padre Jose Augusto', 'end_numero' => '225', 'end_bairro' => 'Sao Francisco', 'cidade_id' => '2604106', 'end_latitude' => '-82892863', 'end_longitude' => '-359783202', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 9843434, 'no_unidade' => 'Farmacia Caruaru Sao Francisco I', 'ft_unidade' => 'farmacia caruaru sao francisco i', 'end_logradouro' => 'Rua Martin Afonso', 'end_numero' => '267', 'end_bairro' => 'Sao Francisco', 'cidade_id' => '2604106', 'end_latitude' => '-82905184571', 'end_longitude' => '-359782934189', 'tipo_estabelecimento_id' => 43, 'nivel_atencao_id' => 2,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 7612389, 'no_unidade' => 'Farmacia Caruaru Sao Francisco II', 'ft_unidade' => 'farmacia caruaru sao francisco ii', 'end_logradouro' => 'Av Vera Cruz', 'end_numero' => '654', 'end_bairro' => 'Sao Francisco', 'cidade_id' => '2604106', 'end_latitude' => '-82883632578', 'end_longitude' => '-359816622734', 'tipo_estabelecimento_id' => 43, 'nivel_atencao_id' => 2,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 5093619, 'no_unidade' => 'Hospital Municipal de Caruaru Dr Manoel Afonso Porto Neto', 'ft_unidade' => 'hospital municipal de caruaru dr manoel afonso porto neto', 'end_logradouro' => 'Rua Quiteria Francisca Silva', 'end_numero' => '494', 'end_bairro' => 'Maria Auxiliadora', 'cidade_id' => '2604106', 'end_latitude' => '-82758912', 'end_longitude' => '-359963379', 'tipo_estabelecimento_id' => 5, 'nivel_atencao_id' => 2,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 2682435, 'no_unidade' => 'Laboratorio Central', 'ft_unidade' => 'laboratorio central', 'end_logradouro' => 'Rua Djalma Dutra', 'end_numero' => 'S/N', 'end_bairro' => 'Nossa Senhora das Dores', 'cidade_id' => '2604106', 'end_latitude' => '-82883905', 'end_longitude' => '-359767625', 'tipo_estabelecimento_id' => 39, 'nivel_atencao_id' => 2,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 2345897, 'no_unidade' => 'Laboratorio de Cito e Anatomopatologia', 'ft_unidade' => 'laboratorio de cito e anatomopatologia', 'end_logradouro' => 'Rua Djalma Dutra', 'end_numero' => 'S/N', 'end_bairro' => 'Nossa Senhora das Dores', 'cidade_id' => '2604106', 'end_latitude' => '-82883905', 'end_longitude' => '-359767625', 'tipo_estabelecimento_id' => 39, 'nivel_atencao_id' => 2,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 3083721, 'no_unidade' => 'Maternidade Santa Dulce dos Pobres', 'ft_unidade' => 'maternidade santa dulce dos pobres', 'end_logradouro' => 'Rua 09', 'end_numero' => 'S/N', 'end_bairro' => 'Loteamento Luiz Gonzaga', 'cidade_id' => '2604106', 'end_latitude' => '-82497375393', 'end_longitude' => '-359714484215', 'tipo_estabelecimento_id' => 5, 'nivel_atencao_id' => 2,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 2346052, 'no_unidade' => 'UBS Agamenon Magalhaes I e Encanto da Serra', 'ft_unidade' => 'ubs agamenon magalhaes i e encanto da serra', 'end_logradouro' => 'Rua Marieta Cruz', 'end_numero' => 'S/N', 'end_bairro' => 'Agamenon Magalhaes', 'cidade_id' => '2604106', 'end_latitude' => '-83061141036', 'end_longitude' => '-359727573395', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 2797968, 'no_unidade' => 'UBS Agamenon Magalhaes II', 'ft_unidade' => 'ubs agamenon magalhaes ii', 'end_logradouro' => 'Trav Zacarias', 'end_numero' => '27', 'end_bairro' => 'Vila Campos', 'cidade_id' => '2604106', 'end_latitude' => '-8283', 'end_longitude' => '-35976', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 2682419, 'no_unidade' => 'UBS Alto do Moura', 'ft_unidade' => 'ubs alto do moura', 'end_logradouro' => 'Rua Sao Sebastiao', 'end_numero' => 'S/N', 'end_bairro' => 'Alto do Moura', 'cidade_id' => '2604106', 'end_latitude' => '-8284753538', 'end_longitude' => '-360019397736', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 7425856, 'no_unidade' => 'UBS Barra de Taquara', 'ft_unidade' => 'ubs barra de taquara', 'end_logradouro' => 'Rua Expedito Antonio Da Silva', 'end_numero' => '49', 'end_bairro' => 'Sitio Taquara de Cima', 'cidade_id' => '2604106', 'end_latitude' => '-82844562655', 'end_longitude' => '-360033774376', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 7425872, 'no_unidade' => 'UBS Cachoeira Seca', 'ft_unidade' => 'ubs cachoeira seca', 'end_logradouro' => 'Rua Maria Quaresma', 'end_numero' => '25', 'end_bairro' => 'Vila Cachoeira Seca', 'cidade_id' => '2604106', 'end_latitude' => '-81677595372', 'end_longitude' => '-359722208977', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 7335865, 'no_unidade' => 'UBS Caic', 'ft_unidade' => 'ubs caic', 'end_logradouro' => 'Rua Sao Nicolau', 'end_numero' => '561', 'end_bairro' => 'Joao Mota', 'cidade_id' => '2604106', 'end_latitude' => '-82806978721', 'end_longitude' => '-359882712364', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 2682508, 'no_unidade' => 'UBS Caiuca I', 'ft_unidade' => 'ubs caiuca i', 'end_logradouro' => 'Rua Sao Joaquim do Monte', 'end_numero' => '684', 'end_bairro' => 'Caiuca', 'cidade_id' => '2604106', 'end_latitude' => '-82863354487', 'end_longitude' => '-359875953197', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 3741273, 'no_unidade' => 'UBS Caiuca II', 'ft_unidade' => 'ubs caiuca ii', 'end_logradouro' => 'Av Caiuca', 'end_numero' => '330', 'end_bairro' => 'Caiuca', 'cidade_id' => '2604106', 'end_latitude' => '-8284365', 'end_longitude' => '-359864958', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 2345862, 'no_unidade' => 'UBS Caja', 'ft_unidade' => 'ubs caja', 'end_logradouro' => 'Rua Oscar Laranjeira', 'end_numero' => '88', 'end_bairro' => 'Vila do Aeroporto', 'cidade_id' => '2604106', 'end_latitude' => '-82868019', 'end_longitude' => '-359635198', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 5481287, 'no_unidade' => 'UBS Canaa', 'ft_unidade' => 'ubs canaa', 'end_logradouro' => 'Vila Canaa', 'end_numero' => 'S/N', 'end_bairro' => 'Vila Canaa', 'cidade_id' => '2604106', 'end_latitude' => '-82531352254', 'end_longitude' => '-359749245644', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 2346044, 'no_unidade' => 'UBS Centenario', 'ft_unidade' => 'ubs centenario', 'end_logradouro' => 'Rua Da Uniao', 'end_numero' => 'S/N', 'end_bairro' => 'Centenario', 'cidade_id' => '2604106', 'end_latitude' => '-82831864', 'end_longitude' => '-359795778', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 2682478, 'no_unidade' => 'UBS Cidade Jardim I e II', 'ft_unidade' => 'ubs cidade jardim i e ii', 'end_logradouro' => 'Rua Maria Bezerra de Araujo', 'end_numero' => '100', 'end_bairro' => 'Cidade Jardim', 'cidade_id' => '2604106', 'end_latitude' => '-82741264', 'end_longitude' => '-359482806', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 7346085, 'no_unidade' => 'UBS Cipo', 'ft_unidade' => 'ubs cipo', 'end_logradouro' => 'Sitio Cipo', 'end_numero' => '50', 'end_bairro' => 'Posto Agamenon', 'cidade_id' => '2604106', 'end_latitude' => '-83032901591', 'end_longitude' => '-359969615936', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 2345846, 'no_unidade' => 'UBS Goncalves Ferreira', 'ft_unidade' => 'ubs goncalves ferreira', 'end_logradouro' => 'Rua Sao Pedro', 'end_numero' => 'S/N', 'end_bairro' => 'Vila Goncalves Ferreira', 'cidade_id' => '2604106', 'end_latitude' => '-82578123', 'end_longitude' => '-358827813', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 9954538, 'no_unidade' => 'UBS Indianopolis I e II', 'ft_unidade' => 'ubs indianopolis i e ii', 'end_logradouro' => 'Rua Monteiro Lobato', 'end_numero' => '480', 'end_bairro' => 'Indianopolis', 'cidade_id' => '2604106', 'end_latitude' => '-82879927', 'end_longitude' => '-35958204', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 2345544, 'no_unidade' => 'UBS Itauna', 'ft_unidade' => 'ubs itauna', 'end_logradouro' => 'Rua Boa Vista', 'end_numero' => 'S/N', 'end_bairro' => 'Povoado Itauna', 'cidade_id' => '2604106', 'end_latitude' => '-82534962278', 'end_longitude' => '-35974817276', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 3741265, 'no_unidade' => 'UBS Jardim Liberdade', 'ft_unidade' => 'ubs jardim liberdade', 'end_logradouro' => 'Rua Arquimedes de Oliveira', 'end_numero' => '222', 'end_bairro' => 'Jardim Liberdade', 'cidade_id' => '2604106', 'end_latitude' => '-82949821', 'end_longitude' => '-359831367', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 2682516, 'no_unidade' => 'UBS Jardim Panorama I', 'ft_unidade' => 'ubs jardim panorama i', 'end_logradouro' => 'Rua Professor Esmeralda Barros', 'end_numero' => '38', 'end_bairro' => 'Jardim Panorama', 'cidade_id' => '2604106', 'end_latitude' => '-82729898684', 'end_longitude' => '-360072183609', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 2345641, 'no_unidade' => 'UBS Joao Mota', 'ft_unidade' => 'ubs joao mota', 'end_logradouro' => 'Sao Nicolau', 'end_numero' => '561', 'end_bairro' => 'Joao Mota', 'cidade_id' => '2604106', 'end_latitude' => '-82808465098', 'end_longitude' => '-359875845909', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 2345668, 'no_unidade' => 'UBS Jose Carlos de Oliveira I', 'ft_unidade' => 'ubs jose carlos de oliveira i', 'end_logradouro' => 'Av Alexandrino Boa Ventura', 'end_numero' => '273', 'end_bairro' => 'Jose Carlos de Oliveira', 'cidade_id' => '2604106', 'end_latitude' => '-82786381724', 'end_longitude' => '-360039138794', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 2797976, 'no_unidade' => 'UBS Jose Carlos de Oliveira II e III', 'ft_unidade' => 'ubs jose carlos de oliveira ii e iii', 'end_logradouro' => 'Rua Cicera Ferreira', 'end_numero' => 'S/N', 'end_bairro' => 'Jose Carlos de Oliveira', 'cidade_id' => '2604106', 'end_latitude' => '-82726076494', 'end_longitude' => '-36011402607', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 2682524, 'no_unidade' => 'UBS Jose Liberato I', 'ft_unidade' => 'ubs jose liberato i', 'end_logradouro' => 'Rua Mestre Galdino', 'end_numero' => '125', 'end_bairro' => 'Loteamento Jose Liberato', 'cidade_id' => '2604106', 'end_latitude' => '-82767271012', 'end_longitude' => '-360061240196', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 7474709, 'no_unidade' => 'UBS Jose Liberato II', 'ft_unidade' => 'ubs jose liberato ii', 'end_logradouro' => 'Av Berna', 'end_numero' => '98', 'end_bairro' => 'Jose Liberato', 'cidade_id' => '2604106', 'end_latitude' => '-82666832077', 'end_longitude' => '-360000300407', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 2345757, 'no_unidade' => 'UBS Jua', 'ft_unidade' => 'ubs jua', 'end_logradouro' => 'Rua Joao Luiz Ferreira', 'end_numero' => 'S/N', 'end_bairro' => 'Povoado Jua', 'cidade_id' => '2604106', 'end_latitude' => '-81921210875', 'end_longitude' => '-359665775299', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 2682451, 'no_unidade' => 'UBS Lagoa de Pedra', 'ft_unidade' => 'ubs lagoa de pedra', 'end_logradouro' => 'Sitio Maribondo', 'end_numero' => 'S/N', 'end_bairro' => 'Sitio Maribondo', 'cidade_id' => '2604106', 'end_latitude' => '-82624574763', 'end_longitude' => '-36044511795', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 2345625, 'no_unidade' => 'UBS Lajes', 'ft_unidade' => 'ubs lajes', 'end_logradouro' => 'Povoado de Lajes', 'end_numero' => 'S/N', 'end_bairro' => 'Povoado de Lajes', 'cidade_id' => '2604106', 'end_latitude' => '-81004017906', 'end_longitude' => '-360210371017', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 2345870, 'no_unidade' => 'UBS Malhada de Barreiras Queimadas', 'ft_unidade' => 'ubs malhada de barreiras queimadas', 'end_logradouro' => 'Povoado Malhada de Barreiras Queimadas', 'end_numero' => 'S/N', 'end_bairro' => 'Povoado Malhada de Barreiras Queimadas', 'cidade_id' => '2604106', 'end_latitude' => '-82460000509', 'end_longitude' => '-359165811539', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 9081461, 'no_unidade' => 'UBS Maria Auxiliadora I e II', 'ft_unidade' => 'ubs maria auxiliadora i e ii', 'end_logradouro' => 'Rua Leonor Galvao', 'end_numero' => '143', 'end_bairro' => 'Maria Auxiliadora', 'cidade_id' => '2604106', 'end_latitude' => '-82618841324', 'end_longitude' => '-360068643093', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 2345854, 'no_unidade' => 'UBS Morro Centenario', 'ft_unidade' => 'ubs morro centenario', 'end_logradouro' => 'Rua Da Se', 'end_numero' => '45', 'end_bairro' => 'Centenario', 'cidade_id' => '2604106', 'end_latitude' => '-82834158099', 'end_longitude' => '-359782505035', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 2345676, 'no_unidade' => 'UBS Morro Sao Francisco', 'ft_unidade' => 'ubs morro sao francisco', 'end_logradouro' => 'Rua Joao Jose do Rego', 'end_numero' => '262', 'end_bairro' => 'Morro do Bom Jesus', 'cidade_id' => '2604106', 'end_latitude' => '-82872398', 'end_longitude' => '-359766203', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 2346036, 'no_unidade' => 'UBS Murici', 'ft_unidade' => 'ubs murici', 'end_logradouro' => 'Sitio Murici', 'end_numero' => 'S/N', 'end_bairro' => 'Vila Murici', 'cidade_id' => '2604106', 'end_latitude' => '-83412736942', 'end_longitude' => '-360389328003', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 2797992, 'no_unidade' => 'UBS Nova Caruaru', 'ft_unidade' => 'ubs nova caruaru', 'end_logradouro' => 'Rua Deputado Osvaldo Rabelo', 'end_numero' => 'S/N', 'end_bairro' => 'Nova Caruaru', 'cidade_id' => '2604106', 'end_latitude' => '-82713972868', 'end_longitude' => '-359850955009', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 7425880, 'no_unidade' => 'UBS Novo Mundo e Demostenes Veras', 'ft_unidade' => 'ubs novo mundo e demostenes veras', 'end_logradouro' => 'Av Recife', 'end_numero' => 'S/N', 'end_bairro' => 'Demostenes Veras', 'cidade_id' => '2604106', 'end_latitude' => '-82819082061', 'end_longitude' => '-35913105011', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 2345633, 'no_unidade' => 'UBS Pau Santo', 'ft_unidade' => 'ubs pau santo', 'end_logradouro' => 'Povoado de Pau Santo', 'end_numero' => 'S/N', 'end_bairro' => 'Povoado de Pau Santo', 'cidade_id' => '2604106', 'end_latitude' => '-82943935394', 'end_longitude' => '-358895874023', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 2346060, 'no_unidade' => 'UBS Peladas', 'ft_unidade' => 'ubs peladas', 'end_logradouro' => 'Povoado de Peladas', 'end_numero' => 'S/N', 'end_bairro' => 'Povoado Peladas', 'cidade_id' => '2604106', 'end_latitude' => '-82909962091', 'end_longitude' => '-358669281006', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 2345900, 'no_unidade' => 'UBS Rafael', 'ft_unidade' => 'ubs rafael', 'end_logradouro' => 'Rua Ernesto Branco', 'end_numero' => '122', 'end_bairro' => 'Vila Rafael', 'cidade_id' => '2604106', 'end_latitude' => '-81809918456', 'end_longitude' => '-359698820114', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 2345684, 'no_unidade' => 'UBS Rendeiras I', 'ft_unidade' => 'ubs rendeiras i', 'end_logradouro' => 'Rua Major Joao Coelho', 'end_numero' => '376', 'end_bairro' => 'Rendeiras', 'cidade_id' => '2604106', 'end_latitude' => '-8280782808', 'end_longitude' => '-359365582466', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 9598170, 'no_unidade' => 'UBS Residencial Alto do Moura', 'ft_unidade' => 'ubs residencial alto do moura', 'end_logradouro' => 'Br 232', 'end_numero' => 'S/N', 'end_bairro' => 'Agamenom Magalhaes', 'cidade_id' => '2604106', 'end_latitude' => '-83002044', 'end_longitude' => '-359880701', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 2346087, 'no_unidade' => 'UBS Riacho Doce', 'ft_unidade' => 'ubs riacho doce', 'end_logradouro' => 'Povoado Riacho Doce', 'end_numero' => 'S/N', 'end_bairro' => 'Povoado Riacho Doce', 'cidade_id' => '2604106', 'end_latitude' => '-81330730918', 'end_longitude' => '-360672569275', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 2345730, 'no_unidade' => 'UBS Salgado I e II', 'ft_unidade' => 'ubs salgado i e ii', 'end_logradouro' => 'Rua Martins Francisco', 'end_numero' => 'S/N', 'end_bairro' => 'Salgado', 'cidade_id' => '2604106', 'end_latitude' => '-8280782808', 'end_longitude' => '-359586381912', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 2682559, 'no_unidade' => 'UBS Salgado III', 'ft_unidade' => 'ubs salgado iii', 'end_logradouro' => 'Rua Varzea do Cedro', 'end_numero' => '42', 'end_bairro' => 'Salgado', 'cidade_id' => '2604106', 'end_latitude' => '-82654515922', 'end_longitude' => '-359567070007', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 2682567, 'no_unidade' => 'UBS Salgado IV', 'ft_unidade' => 'ubs salgado iv', 'end_logradouro' => 'Rua Alexandrino de Alencar', 'end_numero' => '386', 'end_bairro' => 'Salgado', 'cidade_id' => '2604106', 'end_latitude' => '-82772791894', 'end_longitude' => '-359593248367', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 2682486, 'no_unidade' => 'UBS Santa Rosa I', 'ft_unidade' => 'ubs santa rosa i', 'end_logradouro' => 'Rua Arrojado Lisboa', 'end_numero' => 'S/N', 'end_bairro' => 'Santa Rosa', 'cidade_id' => '2604106', 'end_latitude' => '-82917181442', 'end_longitude' => '-359621357918', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 2345560, 'no_unidade' => 'UBS Santa Rosa II III e IV', 'ft_unidade' => 'ubs santa rosa ii iii e iv', 'end_logradouro' => 'Rua Venustriano Correia', 'end_numero' => 'S/N', 'end_bairro' => 'Santa Rosa', 'cidade_id' => '2604106', 'end_latitude' => '-82956250644', 'end_longitude' => '-359626722336', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 2345706, 'no_unidade' => 'UBS Sao Joao da Escocia I III e IV', 'ft_unidade' => 'ubs sao joao da escocia i iii e iv', 'end_logradouro' => 'Rua Genova', 'end_numero' => 'S/N', 'end_bairro' => 'Sao Joao da Escocia', 'cidade_id' => '2604106', 'end_latitude' => '-82677609', 'end_longitude' => '-359511226', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 2682443, 'no_unidade' => 'UBS Serra Velha', 'ft_unidade' => 'ubs serra velha', 'end_logradouro' => 'Sitio Serra Velha', 'end_numero' => 'S/N', 'end_bairro' => 'Vila Serra Velha', 'cidade_id' => '2604106', 'end_latitude' => '-82452567962', 'end_longitude' => '-359128046036', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 7425791, 'no_unidade' => 'UBS Serranopolis', 'ft_unidade' => 'ubs serranopolis', 'end_logradouro' => 'Rua Francisca Ana Da Conceicao', 'end_numero' => 'S/N', 'end_bairro' => 'Serranopolis', 'cidade_id' => '2604106', 'end_latitude' => '-82810163814', 'end_longitude' => '-359143066406', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 9132821, 'no_unidade' => 'UBS Severino Afonso', 'ft_unidade' => 'ubs severino afonso', 'end_logradouro' => 'Rua Florinaldo Da Silva', 'end_numero' => 'S/N', 'end_bairro' => 'Severino Afonso', 'cidade_id' => '2604106', 'end_latitude' => '-82538466122', 'end_longitude' => '-359806215763', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 2345994, 'no_unidade' => 'UBS Sinhazinha I E II', 'ft_unidade' => 'ubs sinhazinha i e ii', 'end_logradouro' => 'Rua Neco Lira', 'end_numero' => 'S/N', 'end_bairro' => 'Salgado', 'cidade_id' => '2604106', 'end_latitude' => '-82775663', 'end_longitude' => '-359642736', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 2345749, 'no_unidade' => 'UBS Terra Vermelha', 'ft_unidade' => 'ubs terra vermelha', 'end_logradouro' => 'Vila Terra Vermelha', 'end_numero' => 'S/N', 'end_bairro' => 'Vila Terra Vermelha', 'cidade_id' => '2604106', 'end_latitude' => '-8444865638', 'end_longitude' => '-360035705566', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 7484763, 'no_unidade' => 'UBS Vassoural I II e III', 'ft_unidade' => 'ubs vassoural i ii e iii', 'end_logradouro' => 'Rua Joao Cordeiro de Souza', 'end_numero' => 'S/N', 'end_bairro' => 'Vassoural', 'cidade_id' => '2604106', 'end_latitude' => '-83003794', 'end_longitude' => '-359697085', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 2682494, 'no_unidade' => 'UBS Vila Kennedy I', 'ft_unidade' => 'ubs vila kennedy i', 'end_logradouro' => 'Rua Eugenio Cordeiro de Souza', 'end_numero' => 'S/N', 'end_bairro' => 'Vila Kennedy', 'cidade_id' => '2604106', 'end_latitude' => '-82866858039', 'end_longitude' => '-359950894117', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 2345692, 'no_unidade' => 'UBS Xicuru', 'ft_unidade' => 'ubs xicuru', 'end_logradouro' => 'Vila Sao Joao de Xicuru', 'end_numero' => 'S/N', 'end_bairro' => 'Vila Xicuru', 'cidade_id' => '2604106', 'end_latitude' => '-82519248031', 'end_longitude' => '-36016960144', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 2864940, 'no_unidade' => 'UBS Xique Xique I e II Dr Xisto Zeno Valones', 'ft_unidade' => 'ubs xique xique i e ii dr xisto zeno valones', 'end_logradouro' => 'Av 16 de Setembro', 'end_numero' => 'S/N', 'end_bairro' => 'Xique Xique', 'cidade_id' => '2604106', 'end_latitude' => '-8265366653', 'end_longitude' => '-360012960434', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 2682281, 'no_unidade' => 'Unidade de Fisioterapia da 3 Idade', 'ft_unidade' => 'unidade de fisioterapia da 3 idade', 'end_logradouro' => 'Av Lourival Jose Da Silva', 'end_numero' => '483', 'end_bairro' => 'Petropolis', 'cidade_id' => '2604106', 'end_latitude' => '-82891553', 'end_longitude' => '-35973624', 'tipo_estabelecimento_id' => 36, 'nivel_atencao_id' => 2,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 2346028, 'no_unidade' => 'Unidade de Vigilancia em Saude', 'ft_unidade' => 'unidade de vigilancia em saude', 'end_logradouro' => 'Av Vera Cruz', 'end_numero' => '654', 'end_bairro' => 'Sao Francisco', 'cidade_id' => '2604106', 'end_latitude' => '-82883632578', 'end_longitude' => '-359797739983', 'tipo_estabelecimento_id' => 50, 'nivel_atencao_id' => 4,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 9147616, 'no_unidade' => 'Unidade Municipal de Fisioterapia', 'ft_unidade' => 'unidade municipal de fisioterapia', 'end_logradouro' => 'Rua deolindo Tavares', 'end_numero' => '191', 'end_bairro' => 'Mauricio de Nassau', 'cidade_id' => '2604106', 'end_latitude' => '-82763263', 'end_longitude' => '-359695438', 'tipo_estabelecimento_id' => 36, 'nivel_atencao_id' => 2,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 3985989, 'no_unidade' => 'Unidade Municipal de Saude Auditiva', 'ft_unidade' => 'unidade municipal de saude auditiva', 'end_logradouro' => 'Av Dom Bosco', 'end_numero' => '143', 'end_bairro' => 'Mauricio de Nassau', 'cidade_id' => '2604106', 'end_latitude' => '-82760729', 'end_longitude' => '-359677761', 'tipo_estabelecimento_id' => 36, 'nivel_atencao_id' => 2,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 2345935, 'no_unidade' => 'Unidade Saude Escola Dr Antonio Vieira', 'ft_unidade' => 'unidade saude escola dr antonio vieira', 'end_logradouro' => 'Rua Presidente Artur Bernardes', 'end_numero' => 'S/N', 'end_bairro' => 'Salgado', 'cidade_id' => '2604106', 'end_latitude' => '-82720366', 'end_longitude' => '-359572279', 'tipo_estabelecimento_id' => 2, 'nivel_atencao_id' => 3,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 9070427, 'no_unidade' => 'UPA Boa Vista Dr Amorim', 'ft_unidade' => 'upa boa vista dr amorim', 'end_logradouro' => 'Rua Paraense', 'end_numero' => 'S/N', 'end_bairro' => 'Divinopolis', 'cidade_id' => '2604106', 'end_latitude' => '-82754689742', 'end_longitude' => '-359827029705', 'tipo_estabelecimento_id' => 73, 'nivel_atencao_id' => 2,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 7819587, 'no_unidade' => 'UPA do Salgado', 'ft_unidade' => 'upa do salgado', 'end_logradouro' => 'Rua Rodopiano Florencio', 'end_numero' => 'S/N', 'end_bairro' => 'Salgado', 'cidade_id' => '2604106', 'end_latitude' => '-82710787698', 'end_longitude' => '-359579730034', 'tipo_estabelecimento_id' => 20, 'nivel_atencao_id' => 2,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 9070419, 'no_unidade' => 'UPA Rendeiras Dr Jose Barreto', 'ft_unidade' => 'upa rendeiras dr jose barreto', 'end_logradouro' => 'Av Major Joao Coelho', 'end_numero' => 'S/N', 'end_bairro' => 'Rendeiras', 'cidade_id' => '2604106', 'end_latitude' => '-82792751941', 'end_longitude' => '-359317946434', 'tipo_estabelecimento_id' => 73, 'nivel_atencao_id' => 2,]);

        CompanyEstablishments::create(['cod_unidade_cnes' => 6451357, 'no_unidade' => 'Secretaria de Saude de Caruaru', 'ft_unidade' => 'secretaria de saude de caruaru', 'end_logradouro' => 'Av Vera Cruz', 'end_numero' => '654', 'end_bairro' => 'Sao Francisco', 'cidade_id' => '2604106', 'tipo_estabelecimento_id' => 68, 'nivel_atencao_id' => 1,]);
    }
}
