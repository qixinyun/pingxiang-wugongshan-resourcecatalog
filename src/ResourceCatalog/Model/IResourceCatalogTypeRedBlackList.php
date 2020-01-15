<?php
namespace ResourceCatalog\Model;

interface IResourceCatalogTypeRedBlackList
{
    const TYPE_RED_BLACK_LIST = array(
        IResourceCatalog::TYPE['NULL'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
		IResourceCatalog::TYPE['XBXZCF'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
		IResourceCatalog::TYPE['XBXZXK'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
		IResourceCatalog::TYPE['GJJLTQYRZXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['RED'],
		IResourceCatalog::TYPE['LYQXPDXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['RED'],
		IResourceCatalog::TYPE['XJFDPDXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['RED'],
		IResourceCatalog::TYPE['DYZGXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['RED'],
		IResourceCatalog::TYPE['LXSDJXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['RED'],
		IResourceCatalog::TYPE['GRRYXXLFW'] => ISearchableResourceCatalogData::RED_BLACK_LIST['RED'],
		IResourceCatalog::TYPE['JGRYXXSLFW'] => ISearchableResourceCatalogData::RED_BLACK_LIST['RED'],
		IResourceCatalog::TYPE['PGJGXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
		IResourceCatalog::TYPE['QSLHXJJTJL'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
		IResourceCatalog::TYPE['YSCRJZJJJZGRDXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
		IResourceCatalog::TYPE['JDCWFXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
		IResourceCatalog::TYPE['QIYEJBXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
		IResourceCatalog::TYPE['GTGSHXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
		IResourceCatalog::TYPE['CMQYSBXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['RED'],
		IResourceCatalog::TYPE['YPLSQYXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
		IResourceCatalog::TYPE['JGRYXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['RED'],
		IResourceCatalog::TYPE['SXQYHMD'] => ISearchableResourceCatalogData::RED_BLACK_LIST['BLACK'],
		IResourceCatalog::TYPE['SPYPTSJBJLGR'] => ISearchableResourceCatalogData::RED_BLACK_LIST['RED'],
		IResourceCatalog::TYPE['SPYPTSJBJLDW'] => ISearchableResourceCatalogData::RED_BLACK_LIST['RED'],
		IResourceCatalog::TYPE['JXMPCPXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['RED'],
		IResourceCatalog::TYPE['QYYCMLXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['BLACK'],
		IResourceCatalog::TYPE['QYZXXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
		IResourceCatalog::TYPE['QYDXXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
		IResourceCatalog::TYPE['CCJCJGXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
		IResourceCatalog::TYPE['TEST'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
    );
}
