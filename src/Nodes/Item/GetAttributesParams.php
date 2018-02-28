<?php

namespace Shopee\Nodes\Item;

use Shopee\RequestParams;

class GetAttributesParams extends RequestParams
{
    protected $required = [
        'category_id',
    ];

    protected $language = '';

    public function getCategoryId(): ?int
    {
        return $this->params['category_id'];
    }

    /**
     * Set the Identify of category.
     * Should call shopee.item.GetCategories to get category first.Related to result.categories.category_id.
     * Must be third level category
     *
     * @param int $categoryId
     * @return $this
     */
    public function setCategoryId(int $categoryId)
    {
        $this->params['category_id'] = $categoryId;

        return $this;
    }

    public function getLanguage(): string
    {
        return $this->language;
    }

    /**
     * This value indicate the language of the attribute_name and options.
     * Applicable values: en (for English), th (for Thai). And if there is no information in this language,
     * we will return the default information. Now this param is only valid for Thailand sellers.
     *
     * @param string $language
     * @return $this
     */
    public function setLanguage(string $language)
    {
        $this->language = $language;

        return $this;
    }
}
