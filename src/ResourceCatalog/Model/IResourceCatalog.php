<?php
namespace ResourceCatalog\Model;

interface IResourceCatalog extends IResourceCatalogTypeName, IResourceCatalogTypeIdentify, IResourceCatalogTypeEnName, IResourceCatalogTypeDoublePublicity, IResourceCatalogTypeRedBlackList, IResourceCatalogIsConfirm
{
    const TYPE = array(
        'NULL' => 0,
        'XBXZCF' => 1,
        'XBXZXK' => 2,
        'GJJLTQYRZXX' => 3,
        'LYQXPDXX' => 4,
        'XJFDPDXX' => 5,
        'DYZGXX' => 6,
        'LXSDJXX' => 7,
        'GRRYXXLFW' => 8,
        'JGRYXXSLFW' => 9,
        'PGJGXX' => 10,
        'QSLHXJJTJL' => 11,
        'YSCRJZJJJZGRDXX' => 12, 
        'JDCWFXX' => 13,
        'QIYEJBXX' => 14,
        'GTGSHXX' => 15,
        'CMQYSBXX' => 16,
        'YPLSQYXX' => 17,
        'JGRYXX' => 18,
        'SXQYHMD' => 19,
        'SPYPTSJBJLGR' => 20,
        'SPYPTSJBJLDW' => 21,
        'JXMPCPXX' => 22,
        'QYYCMLXX' => 23,
        'QYZXXX' => 24,
        'QYDXXX' => 25,
        'CCJCJGXX' => 26,
        'TEST' => 500
    );

    const USERGROUP_TYPE_RELATIONSHIP = array(
        IUserGroup::ID['NULL'] => array(
            self::TYPE['NULL'],
            self::TYPE['XBXZCF'],
            self::TYPE['XBXZXK'],
        ),
        IUserGroup::ID['QJFJ'] => array(self::TYPE['TEST']),
        IUserGroup::ID['QDQB'] => array(),
        IUserGroup::ID['QJW'] => array(),
        IUserGroup::ID['QNYNCGZBGS'] => array(self::TYPE['GJJLTQYRZXX']),
        IUserGroup::ID['QFPB'] => array(),
        IUserGroup::ID['QDZB'] => array(),
        IUserGroup::ID['QGJJ'] => array(),
        IUserGroup::ID['QJGJ'] => array(),
        IUserGroup::ID['QCZJ'] => array(),
        IUserGroup::ID['QSFJ'] => array(),
        IUserGroup::ID['QJDC'] => array(),
        IUserGroup::ID['QWLJ'] => array(
            self::TYPE['LYQXPDXX'],
            self::TYPE['XJFDPDXX'],
            self::TYPE['DYZGXX'],
            self::TYPE['LXSDJXX'],
            self::TYPE['GRRYXXLFW'],
            self::TYPE['JGRYXXSLFW'],
        ),
        IUserGroup::ID['QGLFWZX'] => array(),
        IUserGroup::ID['WGSZRZYHGHFJ'] => array(self::TYPE['PGJGXX']),
        IUserGroup::ID['WGSLYFJ'] => array(self::TYPE['QSLHXJJTJL']),
        IUserGroup::ID['WGSGAFJ'] => array(self::TYPE['YSCRJZJJJZGRDXX'], self::TYPE['JDCWFXX']),
        IUserGroup::ID['QSCJDGLJ'] => array(
            self::TYPE['QIYEJBXX'],
            self::TYPE['GTGSHXX'],
            self::TYPE['CMQYSBXX'],
            self::TYPE['YPLSQYXX'],
            self::TYPE['JGRYXX'],
            self::TYPE['SXQYHMD'],
            self::TYPE['SPYPTSJBJLGR'],
            self::TYPE['SPYPTSJBJLDW'],
            self::TYPE['JXMPCPXX'],
            self::TYPE['QYYCMLXX'],
            self::TYPE['QYZXXX'],
            self::TYPE['QYDXXX'],
            self::TYPE['CCJCJGXX'],
        ),
        IUserGroup::ID['JTGS'] => array(),
        IUserGroup::ID['XCZXGS'] => array(),
        IUserGroup::ID['WLSX'] => array(),
        IUserGroup::ID['MTBSC'] => array(),
    );

    const STATUS_NORMAL = 0;

    const STATUS_DELETE = -2;
}
