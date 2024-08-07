<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PalavrasSeeder extends Seeder {

    public function run(): void {
        DB::table('palavras')->insert([
            // NSERT INTO `palavras` (`id`, `nome`, `created_at`, `updated_at`) VALUES
            ['id' => 25, 'nome' => 'Luigi'],
            ['id' => 26, 'nome' => 'Docinho'],
            ['id' => 27, 'nome' => 'Cebolinha'],
            ['id' => 28, 'nome' => 'Link'],
            ['id' => 29, 'nome' => 'Orégano'],
            ['id' => 30, 'nome' => 'Sálvia'],
            ['id' => 31, 'nome' => 'Coentro'],
            ['id' => 32, 'nome' => 'Tomilho'],
            ['id' => 33, 'nome' => 'E-mail'],
            ['id' => 34, 'nome' => 'Website'],
            ['id' => 35, 'nome' => 'Download'],
            ['id' => 36, 'nome' => 'Stream'],
            ['id' => 37, 'nome' => 'Carta'],
            ['id' => 38, 'nome' => 'Telegrama'],
            ['id' => 39, 'nome' => 'Fax'],
            ['id' => 40, 'nome' => 'Bip'],
            ['id' => 41, 'nome' => 'Mensal'],
            ['id' => 42, 'nome' => 'Anual'],
            ['id' => 43, 'nome' => 'Semestral'],
            ['id' => 44, 'nome' => 'Semanal'],
            ['id' => 45, 'nome' => 'Diário'],
            ['id' => 46, 'nome' => 'Agenda'],
            ['id' => 47, 'nome' => 'Planner'],
            ['id' => 48, 'nome' => 'Bloco'],
            ['id' => 49, 'nome' => 'Batom'],
            ['id' => 50, 'nome' => 'Gloss'],
            ['id' => 51, 'nome' => 'Tint'],
            ['id' => 52, 'nome' => 'Bálsamo'],
            ['id' => 53, 'nome' => 'Baile'],
            ['id' => 54, 'nome' => 'Máscara'],
            ['id' => 55, 'nome' => 'Escola'],
            ['id' => 56, 'nome' => 'Marchinha'],
            ['id' => 57, 'nome' => 'Frevo'],
            ['id' => 58, 'nome' => 'Axé'],
            ['id' => 59, 'nome' => 'Bossa'],
            ['id' => 60, 'nome' => 'Pagode'],
            ['id' => 61, 'nome' => 'Imenso'],
            ['id' => 62, 'nome' => 'Colossal'],
            ['id' => 63, 'nome' => 'Titânico'],
            ['id' => 64, 'nome' => 'Monumental'],
            ['id' => 65, 'nome' => 'Frankenstein'],
            ['id' => 66, 'nome' => 'Dom Quixote'],
            ['id' => 67, 'nome' => 'Metropolis'],
            ['id' => 68, 'nome' => 'Drácula'],
            ['id' => 69, 'nome' => 'Moinho'],
            ['id' => 70, 'nome' => 'Samba'],
            ['id' => 71, 'nome' => 'Conversa'],
            ['id' => 72, 'nome' => 'Gigante'],
            ['id' => 73, 'nome' => 'Mangueira'],
            ['id' => 74, 'nome' => 'Regador'],
            ['id' => 75, 'nome' => 'Pá'],
            ['id' => 76, 'nome' => 'Tesoura'],
            ['id' => 77, 'nome' => 'Perspicaz'],
            ['id' => 78, 'nome' => 'Esperta'],
            ['id' => 79, 'nome' => 'Astuta'],
            ['id' => 80, 'nome' => 'Hábil'],
            ['id' => 81, 'nome' => 'Beija-flor'],
            ['id' => 82, 'nome' => 'Canário'],
            ['id' => 83, 'nome' => 'Sabiá'],
            ['id' => 84, 'nome' => 'Rouxinol'],
            ['id' => 85, 'nome' => 'Desfile'],
            ['id' => 86, 'nome' => 'Book'],
            ['id' => 87, 'nome' => 'Anúncio'],
            ['id' => 88, 'nome' => 'Evento'],
            ['id' => 89, 'nome' => 'Churrasco'],
            ['id' => 90, 'nome' => 'Chimarrão'],
            ['id' => 91, 'nome' => 'Bombacha'],
            ['id' => 92, 'nome' => 'Carreteiro'],
            ['id' => 93, 'nome' => 'Sorvete'],
            ['id' => 94, 'nome' => 'Picolé'],
            ['id' => 95, 'nome' => 'Shake'],
            ['id' => 96, 'nome' => 'Açaí'],
            ['id' => 97, 'nome' => 'Tiago'],
            ['id' => 98, 'nome' => 'Simão'],
            ['id' => 99, 'nome' => 'André'],
            ['id' => 100, 'nome' => 'Pedro'],
            ['id' => 101, 'nome' => 'Rodrigo'],
            ['id' => 102, 'nome' => 'Palito'],
            ['id' => 103, 'nome' => 'Benson'],
            ['id' => 104, 'nome' => 'Newton-John'],
            ['id' => 105, 'nome' => 'Bateria'],
            ['id' => 106, 'nome' => 'Comissão'],
            ['id' => 107, 'nome' => 'Evolução'],
            ['id' => 108, 'nome' => 'Harmonia'],
            ['id' => 109, 'nome' => 'Cuíca'],
            ['id' => 110, 'nome' => 'Vombate'],
            ['id' => 111, 'nome' => 'Coala'],
            ['id' => 112, 'nome' => 'Diabo'],
            ['id' => 113, 'nome' => 'Tambor'],
            ['id' => 114, 'nome' => 'Flauta'],
            ['id' => 115, 'nome' => 'Cravo'],
            ['id' => 116, 'nome' => 'Triângulo'],
            ['id' => 117, 'nome' => 'Canela'],
            ['id' => 118, 'nome' => 'Cúrcuma'],
            ['id' => 119, 'nome' => 'Zimbro'],
            ['id' => 120, 'nome' => 'Cardamomo'],
            ['id' => 121, 'nome' => 'Alergia'],
            ['id' => 122, 'nome' => 'Irritação'],
            ['id' => 123, 'nome' => 'Inflamação'],
            ['id' => 124, 'nome' => 'Coceira'],
            ['id' => 125, 'nome' => 'Pele'],
            ['id' => 126, 'nome' => 'Fígado'],
            ['id' => 127, 'nome' => 'Coração'],
            ['id' => 128, 'nome' => 'Estômago'],
            ['id' => 129, 'nome' => 'Frequência'],
            ['id' => 130, 'nome' => 'Timbre'],
            ['id' => 131, 'nome' => 'Tom'],
            ['id' => 132, 'nome' => 'Volume'],
            ['id' => 133, 'nome' => 'Comichão'],
            ['id' => 134, 'nome' => 'Mickey'],
            ['id' => 135, 'nome' => 'Cérebro'],
            ['id' => 136, 'nome' => 'Jerry'],
            ['id' => 137, 'nome' => 'Mangás'],
            ['id' => 138, 'nome' => 'Gibis'],
            ['id' => 139, 'nome' => 'Almanaques'],
            ['id' => 140, 'nome' => 'Revistinhas'],
            ['id' => 141, 'nome' => 'Cirurgias'],
            ['id' => 142, 'nome' => 'Exames'],
            ['id' => 143, 'nome' => 'Hemodiálises'],
            ['id' => 144, 'nome' => 'Transplantes'],
            ['id' => 145, 'nome' => 'Espiãs'],
            ['id' => 146, 'nome' => 'Patetas'],
            ['id' => 147, 'nome' => 'Porquinhos'],
            ['id' => 148, 'nome' => 'Marias'],
            ['id' => 149, 'nome' => 'Revistas'],
            ['id' => 150, 'nome' => 'Fiscalizações'],
            ['id' => 151, 'nome' => 'Abordagens'],
            ['id' => 152, 'nome' => 'Operações'],
            ['id' => 153, 'nome' => 'Terra'],
            ['id' => 154, 'nome' => 'Marte'],
            ['id' => 155, 'nome' => 'Vênus'],
            ['id' => 156, 'nome' => 'Saturno'],
            ['id' => 157, 'nome' => 'Afrodite'],
            ['id' => 158, 'nome' => 'Zeus'],
            ['id' => 159, 'nome' => 'Atenas'],
            ['id' => 160, 'nome' => 'Hades'],
            ['id' => 161, 'nome' => 'Nanica'],
            ['id' => 162, 'nome' => 'Maçã'],
            ['id' => 163, 'nome' => 'Plantain'],
            ['id' => 164, 'nome' => 'Prata'],
            ['id' => 165, 'nome' => 'Hércules'],
            ['id' => 166, 'nome' => 'Dálmatas'],
            ['id' => 167, 'nome' => 'Corcunda'],
            ['id' => 168, 'nome' => 'Pinóquio'],
            ['id' => 169, 'nome' => 'Feira'],
            ['id' => 170, 'nome' => 'Mostra'],
            ['id' => 171, 'nome' => 'Apresentação'],
            ['id' => 172, 'nome' => 'Exibição'],
            ['id' => 173, 'nome' => 'Vida'],
            ['id' => 174, 'nome' => 'Liberdade'],
            ['id' => 175, 'nome' => 'Igualdade'],
            ['id' => 176, 'nome' => 'Segurança'],
            ['id' => 177, 'nome' => 'Eucaliptos'],
            ['id' => 178, 'nome' => 'Carvalhos'],
            ['id' => 179, 'nome' => 'Jatobás'],
            ['id' => 180, 'nome' => 'Ipês'],
            ['id' => 181, 'nome' => 'Pinheiros'],
            ['id' => 182, 'nome' => 'Mooca'],
            ['id' => 183, 'nome' => 'Ipiranga'],
            ['id' => 184, 'nome' => 'Jardins'],
            ['id' => 185, 'nome' => 'Alfa'],
            ['id' => 186, 'nome' => 'Beta'],
            ['id' => 187, 'nome' => 'Gama'],
            ['id' => 188, 'nome' => 'Lambda'],
            ['id' => 189, 'nome' => 'Zebra'],
            ['id' => 190, 'nome' => 'Palhaço'],
            ['id' => 191, 'nome' => 'Cascudo'],
            ['id' => 192, 'nome' => 'Anjo'],
            ['id' => 193, 'nome' => 'Pia'],
            ['id' => 194, 'nome' => 'Late'],
            ['id' => 195, 'nome' => 'Muge'],
            ['id' => 196, 'nome' => 'Uiva'],
            ['id' => 197, 'nome' => 'Mia'],
            ['id' => 198, 'nome' => 'Jules'],
            ['id' => 199, 'nome' => 'Vincent'],
            ['id' => 200, 'nome' => 'Zed'],
            ['id' => 201, 'nome' => 'Mandioca'],
            ['id' => 202, 'nome' => 'Cará'],
            ['id' => 203, 'nome' => 'Batata'],
            ['id' => 204, 'nome' => 'Inhame'],
            ['id' => 205, 'nome' => 'Túnica'],
            ['id' => 206, 'nome' => 'Manto'],
            ['id' => 207, 'nome' => 'Coroa'],
            ['id' => 208, 'nome' => 'Cetro'],
            ['id' => 209, 'nome' => 'Secretário'],
            ['id' => 210, 'nome' => 'Assistente'],
            ['id' => 211, 'nome' => 'Assessor'],
            ['id' => 212, 'nome' => 'Colaborador'],
            ['id' => 213, 'nome' => 'Scooby'],
            ['id' => 214, 'nome' => 'Coragem'],
            ['id' => 215, 'nome' => 'Ajudante'],
            ['id' => 216, 'nome' => 'Brian'],
            ['id' => 217, 'nome' => 'Buraco'],
            ['id' => 218, 'nome' => 'Paciência'],
            ['id' => 219, 'nome' => 'Truco'],
            ['id' => 220, 'nome' => 'Poker'],
            ['id' => 221, 'nome' => 'Nestlé'],
            ['id' => 222, 'nome' => 'Pifpaf'],
            ['id' => 223, 'nome' => 'Seara'],
            ['id' => 224, 'nome' => 'Perdigão'],
            ['id' => 225, 'nome' => 'Sadia'],
            ['id' => 226, 'nome' => 'Sã'],
            ['id' => 227, 'nome' => 'Forte'],
            ['id' => 228, 'nome' => 'Saudável'],
            ['id' => 229, 'nome' => 'Pacatez'],
            ['id' => 230, 'nome' => 'Tranquilidade'],
            ['id' => 231, 'nome' => 'Serenidade'],
            ['id' => 232, 'nome' => 'Mansidão'],
            ['id' => 233, 'nome' => 'Vento'],
            ['id' => 234, 'nome' => 'Sol'],
            ['id' => 235, 'nome' => 'Carvão'],
            ['id' => 236, 'nome' => 'Água'],
            ['id' => 237, 'nome' => 'Ré'],
            ['id' => 238, 'nome' => 'Juíza'],
            ['id' => 239, 'nome' => 'Testemunha'],
            ['id' => 240, 'nome' => 'Autora'],
            ['id' => 241, 'nome' => 'Dó'],
            ['id' => 242, 'nome' => 'Mi'],
            ['id' => 243, 'nome' => 'Si'],
            ['id' => 244, 'nome' => 'Fá'],
            ['id' => 245, 'nome' => 'Lá'],
            ['id' => 246, 'nome' => 'Ali'],
            ['id' => 247, 'nome' => 'Aqui'],
            ['id' => 248, 'nome' => 'Acolá'],
            ['id' => 249, 'nome' => 'lona'],
            ['id' => 250, 'nome' => 'picadeiro'],
            ['id' => 251, 'nome' => 'equilibrista'],
            ['id' => 252, 'nome' => 'mágico'],
            ['id' => 253, 'nome' => 'retângulo'],
            ['id' => 254, 'nome' => 'quadrado'],
            ['id' => 255, 'nome' => 'trapézio'],
            ['id' => 256, 'nome' => 'paralelogramo'],
            ['id' => 257, 'nome' => 'rolo'],
            ['id' => 258, 'nome' => 'tira'],
            ['id' => 259, 'nome' => 'pururuca'],
            ['id' => 260, 'nome' => 'barriga'],
            ['id' => 262, 'nome' => 'losango'],
            ['id' => 263, 'nome' => 'trevo'],
            ['id' => 264, 'nome' => 'ponta de lança'],
            ['id' => 265, 'nome' => 'azeite'],
            ['id' => 266, 'nome' => 'lubrifique'],
            ['id' => 267, 'nome' => 'besunte'],
            ['id' => 268, 'nome' => 'engraxe'],
            ['id' => 269, 'nome' => 'borracha'],
            ['id' => 270, 'nome' => 'grafite'],
            ['id' => 271, 'nome' => 'caderno'],
            ['id' => 272, 'nome' => 'marca-texto'],
            ['id' => 273, 'nome' => 'óleo'],
            ['id' => 274, 'nome' => 'acrílica'],
            ['id' => 275, 'nome' => 'guache'],
            ['id' => 276, 'nome' => 'epóxi'],
            ['id' => 277, 'nome' => 'ácido'],
            ['id' => 278, 'nome' => 'sal'],
            ['id' => 279, 'nome' => 'óxido'],
            ['id' => 280, 'nome' => 'base'],
            ['id' => 281, 'nome' => 'laranja'],
            ['id' => 282, 'nome' => 'rosa'],
            ['id' => 283, 'nome' => 'amarelo'],
            ['id' => 284, 'nome' => 'violeta'],
            ['id' => 285, 'nome' => 'vermelho'],
            ['id' => 286, 'nome' => 'azul'],
            ['id' => 287, 'nome' => 'verde'],
            ['id' => 288, 'nome' => 'preto'],
            ['id' => 289, 'nome' => 'branco'],
            ['id' => 300, 'nome' => 'banana'],
            ['id' => 301, 'nome' => 'maracujá'],
            ['id' => 302, 'nome' => 'morango'],
            ['id' => 303, 'nome' => 'pêssego'],
            ['id' => 304, 'nome' => 'manga'],
            ['id' => 305, 'nome' => 'zíper'],
            ['id' => 306, 'nome' => 'gola'],
            ['id' => 307, 'nome' => 'capuz'],
            ['id' => 309, 'nome' => 'balsâmico'],
            ['id' => 310, 'nome' => 'arroz'],
            ['id' => 311, 'nome' => 'malte'],
            ['id' => 312, 'nome' => 'leite'],
            ['id' => 313, 'nome' => 'queijo'],
            ['id' => 314, 'nome' => 'ovo'],
            ['id' => 315, 'nome' => 'carne'],
            ['id' => 316, 'nome' => 'cotonete'],
            ['id' => 317, 'nome' => 'fio dental'],
            ['id' => 318, 'nome' => 'condicionador'],
            ['id' => 319, 'nome' => 'shampoo'],
            ['id' => 321, 'nome' => 'café'],
            ['id' => 322, 'nome' => 'chá'],
            ['id' => 324, 'nome' => 'capuccino'],
            ['id' => 325, 'nome' => 'sabão'],
            ['id' => 326, 'nome' => 'chocolate'],
            ['id' => 327, 'nome' => 'proteína'],
            ['id' => 328, 'nome' => 'cereal'],
            ['id' => 329, 'nome' => 'meia'],
            ['id' => 330, 'nome' => 'cabra'],
            ['id' => 331, 'nome' => 'moleque'],
            ['id' => 332, 'nome' => 'chinelo'],
            ['id' => 341, 'nome' => 'tomada'],
            ['id' => 342, 'nome' => 'conquista'],
            ['id' => 343, 'nome' => 'ocupação'],
            ['id' => 344, 'nome' => 'domínio'],
            ['id' => 349, 'nome' => 'passagem'],
            ['id' => 350, 'nome' => 'hospedagem'],
            ['id' => 351, 'nome' => 'alimentação'],
            ['id' => 352, 'nome' => 'passeios'],
            ['id' => 353, 'nome' => 'plugue'],
            ['id' => 354, 'nome' => 'fio'],
            ['id' => 355, 'nome' => 'soquete'],
            ['id' => 356, 'nome' => 'fusível'],
            ['id' => 357, 'nome' => 'bolacha'],
            ['id' => 358, 'nome' => 'bofetada'],
            ['id' => 359, 'nome' => 'tapa'],
            ['id' => 360, 'nome' => 'safanão'],
            ['id' => 361, 'nome' => 'gramado'],
            ['id' => 362, 'nome' => 'arquibancada'],
            ['id' => 363, 'nome' => 'bilheteria'],
            ['id' => 364, 'nome' => 'vestiário'],
            ['id' => 365, 'nome' => 'biscoito'],
            ['id' => 366, 'nome' => 'pipoca'],
            ['id' => 368, 'nome' => 'jujuba'],
            ['id' => 369, 'nome' => 'petisco'],
            ['id' => 370, 'nome' => 'brinquedo'],
            ['id' => 371, 'nome' => 'coleira'],
            ['id' => 372, 'nome' => 'vasilha'],
            ['id' => 373, 'nome' => 'pista'],
            ['id' => 374, 'nome' => 'grid'],
            ['id' => 375, 'nome' => 'piloto'],
            ['id' => 376, 'nome' => 'equipe'],
            ['id' => 377, 'nome' => 'sinal'],
            ['id' => 378, 'nome' => 'chapuzinho'],
            ['id' => 379, 'nome' => 'tapete'],
            ['id' => 380, 'nome' => 'alerta'],
            ['id' => 381, 'nome' => 'caribe'],
            ['id' => 382, 'nome' => 'crocante'],
            ['id' => 383, 'nome' => 'talento'],
            ['id' => 384, 'nome' => 'capri'],
            ['id' => 385, 'nome' => 'ibiza'],
            ['id' => 386, 'nome' => 'maui'],
            ['id' => 387, 'nome' => 'noronha'],
            ['id' => 389, 'nome' => 'Adorno'],
            ['id' => 390, 'nome' => 'Ornato'],
            ['id' => 391, 'nome' => 'Adereço'],
            ['id' => 392, 'nome' => 'Bibelô'],
            ['id' => 393, 'nome' => 'Animal'],
            ['id' => 394, 'nome' => 'Vegetal'],
            ['id' => 395, 'nome' => 'Monera'],
            ['id' => 396, 'nome' => 'Protista'],
            ['id' => 397, 'nome' => 'Liame'],
            ['id' => 398, 'nome' => 'Elo'],
            ['id' => 399, 'nome' => 'Conexão'],
            ['id' => 400, 'nome' => 'Relação'],
            ['id' => 401, 'nome' => 'Terreno'],
            ['id' => 402, 'nome' => 'Criatura'],
            ['id' => 403, 'nome' => 'Feitiço'],
            ['id' => 404, 'nome' => 'Artefato'],
            ['id' => 405, 'nome' => 'Max Weber'],
            ['id' => 406, 'nome' => 'Émile Durkheim'],
            ['id' => 407, 'nome' => 'Sérgio Buarque de Holanda'],
            ['id' => 408, 'nome' => 'Manteiga'],
            ['id' => 410, 'nome' => 'Coco'],
            ['id' => 411, 'nome' => 'Açúcar'],
            ['id' => 412, 'nome' => 'Cabeça'],
            ['id' => 413, 'nome' => 'Chefe'],
            ['id' => 414, 'nome' => 'Capitão'],
            ['id' => 415, 'nome' => 'Manda-chuva'],
            ['id' => 416, 'nome' => 'Arara'],
            ['id' => 417, 'nome' => 'Pelicano'],
            ['id' => 418, 'nome' => 'Andorinha'],
            ['id' => 419, 'nome' => 'Corvo'],
            ['id' => 420, 'nome' => 'Rei'],
            ['id' => 422, 'nome' => 'Magalhães'],
            ['id' => 423, 'nome' => 'Imperador'],
            ['id' => 424, 'nome' => 'VSCode'],
            ['id' => 425, 'nome' => 'Dom Casmurro'],
            ['id' => 426, 'nome' => 'Quincas Borba'],
        ]);
    }
}
