<?
namespace Linetime\Comments;
use Bitrix\Main\Entity;
class CommentTable extends Entity\DataManager
{
    public static function getTableName()
    {
        return 'linetime_comments';
    }
    
    public static function getMap()
    {
        return array(
            new Entity\IntegerField('ID'),
            new Entity\IntegerField('IBLOCK_ID'),
            new Entity\DateField('COMMENT_DATE'),
            new Entity\StringField('NAME'),
            new Entity\StringField('TEXT'),
        );
    }
}