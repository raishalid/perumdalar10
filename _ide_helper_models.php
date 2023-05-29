<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Agent
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $agentcategories_id
 * @property string $name
 * @property string|null $address
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $wa
 * @property string|null $pict
 * @property string|null $description
 * @property string|null $deposit
 * @property int|null $verification_status
 * @property string|null $verified_by
 * @property string|null $verified_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\AgentCategory|null $agentCategory
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Agent newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Agent newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Agent query()
 * @method static \Illuminate\Database\Eloquent\Builder|Agent whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agent whereAgentcategoriesId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agent whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agent whereDeposit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agent whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agent whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agent whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agent whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agent wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agent wherePict($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agent whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agent whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agent whereVerificationStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agent whereVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agent whereVerifiedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agent whereWa($value)
 */
	class Agent extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\AgentCategory
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Agent> $agents
 * @property-read int|null $agents_count
 * @method static \Illuminate\Database\Eloquent\Builder|AgentCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AgentCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AgentCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|AgentCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AgentCategory whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AgentCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AgentCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AgentCategory whereUpdatedAt($value)
 */
	class AgentCategory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\BelajarModel
 *
 * @method static \Illuminate\Database\Eloquent\Builder|BelajarModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BelajarModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BelajarModel query()
 */
	class BelajarModel extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Berita
 *
 * @property int $id
 * @property string $judul
 * @property int $kategori_berita_id
 * @property string $tanggal_terbit
 * @property string $excerpts
 * @property string $slug
 * @property string $author
 * @property string $isi_berita
 * @property string $gbr_berita
 * @property string|null $url_video
 * @property int $headline
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\KategoriBerita $kategori_berita
 * @method static \Illuminate\Database\Eloquent\Builder|Berita newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Berita newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Berita query()
 * @method static \Illuminate\Database\Eloquent\Builder|Berita whereAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Berita whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Berita whereExcerpts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Berita whereGbrBerita($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Berita whereHeadline($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Berita whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Berita whereIsiBerita($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Berita whereJudul($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Berita whereKategoriBeritaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Berita whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Berita whereTanggalTerbit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Berita whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Berita whereUrlVideo($value)
 */
	class Berita extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Customer
 *
 * @property int $id
 * @property string $name
 * @property string $review
 * @property string $photo
 * @property int|null $product_id
 * @property int|null $service_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Service|null $service
 * @method static \Illuminate\Database\Eloquent\Builder|Customer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereReview($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereServiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereUpdatedAt($value)
 */
	class Customer extends \Eloquent {}
}

namespace App\Models\Ecommerce{
/**
 * App\Models\Ecommerce\ItemOrder
 *
 * @property int $id
 * @property int $order_id
 * @property int $product_id
 * @property string|null $price
 * @property string|null $cost
 * @property string|null $quantity
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property-read \App\Models\Ecommerce\Product $product
 * @property-read \App\Models\Ecommerce\SalesOrder $salesOrder
 * @method static \Illuminate\Database\Eloquent\Builder|ItemOrder newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ItemOrder newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ItemOrder query()
 * @method static \Illuminate\Database\Eloquent\Builder|ItemOrder whereCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ItemOrder whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ItemOrder whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ItemOrder whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ItemOrder wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ItemOrder whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ItemOrder whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ItemOrder whereUpdatedAt($value)
 */
	class ItemOrder extends \Eloquent {}
}

namespace App\Models\Ecommerce{
/**
 * App\Models\Ecommerce\Product
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $description
 * @property string|null $sku
 * @property string|null $barcode
 * @property int|null $category_id
 * @property int|null $brand_id
 * @property string|null $price
 * @property string|null $cost
 * @property string|null $quantity
 * @property string|null $weight
 * @property string|null $pict1
 * @property string|null $pict2
 * @property int|null $active
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Ecommerce\ItemOrder> $itemOrder
 * @property-read int|null $item_order_count
 * @property-read \App\Models\Ecommerce\ProductBrand|null $productBrand
 * @property-read \App\Models\Ecommerce\ProductCategory|null $productCategory
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Ecommerce\TempOrder> $tempOrder
 * @property-read int|null $temp_order_count
 * @method static \Illuminate\Database\Eloquent\Builder|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereBarcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereBrandId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePict1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePict2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereSku($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereWeight($value)
 */
	class Product extends \Eloquent {}
}

namespace App\Models\Ecommerce{
/**
 * App\Models\Ecommerce\ProductBrand
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $description
 * @property string|null $label
 * @property int|null $vendor_id
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Ecommerce\Product> $product
 * @property-read int|null $product_count
 * @property-read \App\Models\Ecommerce\Vendor|null $vendor
 * @method static \Illuminate\Database\Eloquent\Builder|ProductBrand newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductBrand newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductBrand query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductBrand whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductBrand whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductBrand whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductBrand whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductBrand whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductBrand whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductBrand whereVendorId($value)
 */
	class ProductBrand extends \Eloquent {}
}

namespace App\Models\Ecommerce{
/**
 * App\Models\Ecommerce\ProductCategory
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $description
 * @property int|null $parent_id
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Ecommerce\Product> $product
 * @property-read int|null $product_count
 * @property-read \App\Models\Ecommerce\ProductParent|null $productParent
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory whereUpdatedAt($value)
 */
	class ProductCategory extends \Eloquent {}
}

namespace App\Models\Ecommerce{
/**
 * App\Models\Ecommerce\ProductParent
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $description
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Ecommerce\ProductCategory> $productCategory
 * @property-read int|null $product_category_count
 * @method static \Illuminate\Database\Eloquent\Builder|ProductParent newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductParent newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductParent query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductParent whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductParent whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductParent whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductParent whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductParent whereUpdatedAt($value)
 */
	class ProductParent extends \Eloquent {}
}

namespace App\Models\Ecommerce{
/**
 * App\Models\Ecommerce\SalesDeposit
 *
 * @property int $id
 * @property int $user_id
 * @property string $tr_at
 * @property int|null $type_id
 * @property string|null $tr_amount
 * @property string|null $remarks
 * @property string|null $verified_at
 * @property string|null $verified_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|SalesDeposit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SalesDeposit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SalesDeposit query()
 * @method static \Illuminate\Database\Eloquent\Builder|SalesDeposit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalesDeposit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalesDeposit whereRemarks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalesDeposit whereTrAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalesDeposit whereTrAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalesDeposit whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalesDeposit whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalesDeposit whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalesDeposit whereVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalesDeposit whereVerifiedBy($value)
 */
	class SalesDeposit extends \Eloquent {}
}

namespace App\Models\Ecommerce{
/**
 * App\Models\Ecommerce\SalesOrder
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $order_number
 * @property string $order_at
 * @property string|null $status
 * @property string|null $remark
 * @property string|null $notes
 * @property string|null $verified_by
 * @property string|null $verified_at
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Ecommerce\ItemOrder> $itemOrder
 * @property-read int|null $item_order_count
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|SalesOrder newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SalesOrder newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SalesOrder query()
 * @method static \Illuminate\Database\Eloquent\Builder|SalesOrder whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalesOrder whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalesOrder whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalesOrder whereOrderAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalesOrder whereOrderNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalesOrder whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalesOrder whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalesOrder whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalesOrder whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalesOrder whereVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalesOrder whereVerifiedBy($value)
 */
	class SalesOrder extends \Eloquent {}
}

namespace App\Models\Ecommerce{
/**
 * App\Models\Ecommerce\TempOrder
 *
 * @property-read \App\Models\Ecommerce\Product $product
 * @method static \Illuminate\Database\Eloquent\Builder|TempOrder newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TempOrder newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TempOrder query()
 */
	class TempOrder extends \Eloquent {}
}

namespace App\Models\Ecommerce{
/**
 * App\Models\Ecommerce\TransactionType
 *
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionType query()
 */
	class TransactionType extends \Eloquent {}
}

namespace App\Models\Ecommerce{
/**
 * App\Models\Ecommerce\Vendor
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $address
 * @property string|null $phone
 * @property string|null $email
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Ecommerce\ProductBrand> $productBrand
 * @property-read int|null $product_brand_count
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor query()
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor whereUpdatedAt($value)
 */
	class Vendor extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\FundingSource
 *
 * @property int $id
 * @property string $fundingsource_name
 * @property string $fundingsource_description
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Project> $projects
 * @property-read int|null $projects_count
 * @method static \Illuminate\Database\Eloquent\Builder|FundingSource newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FundingSource newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FundingSource query()
 * @method static \Illuminate\Database\Eloquent\Builder|FundingSource whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FundingSource whereFundingsourceDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FundingSource whereFundingsourceName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FundingSource whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FundingSource whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FundingSource whereUpdatedAt($value)
 */
	class FundingSource extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Investor
 *
 * @property int $id
 * @property string $investor_name
 * @property string|null $investor_info
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Project> $projects
 * @property-read int|null $projects_count
 * @method static \Illuminate\Database\Eloquent\Builder|Investor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Investor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Investor query()
 * @method static \Illuminate\Database\Eloquent\Builder|Investor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Investor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Investor whereInvestorInfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Investor whereInvestorName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Investor whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Investor whereUpdatedAt($value)
 */
	class Investor extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\KategoriBerita
 *
 * @property int $id
 * @property string $kategori_berita
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Berita> $beritas
 * @property-read int|null $beritas_count
 * @method static \Illuminate\Database\Eloquent\Builder|KategoriBerita newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KategoriBerita newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KategoriBerita query()
 * @method static \Illuminate\Database\Eloquent\Builder|KategoriBerita whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KategoriBerita whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KategoriBerita whereKategoriBerita($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KategoriBerita whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KategoriBerita whereUpdatedAt($value)
 */
	class KategoriBerita extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Project
 *
 * @property int $id
 * @property int $project_category_id
 * @property int $project_provider_id
 * @property int $project_status_id
 * @property int $funding_source_id
 * @property string $project_name
 * @property string|null $project_description
 * @property string $project_budget
 * @property string|null $project_target
 * @property string|null $project_start
 * @property string|null $project_duration
 * @property string|null $project_html
 * @property string|null $project_headgbr
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\ProjectCategory $category
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ProjectFile> $files
 * @property-read int|null $files_count
 * @property-read \App\Models\FundingSource $fundingSource
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Investor> $investors
 * @property-read int|null $investors_count
 * @property-read \App\Models\ProjectProvider $provider
 * @property-read \App\Models\ProjectStatus $status
 * @method static \Illuminate\Database\Eloquent\Builder|Project newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Project newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Project query()
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereFundingSourceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereProjectBudget($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereProjectCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereProjectDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereProjectDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereProjectHeadgbr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereProjectHtml($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereProjectName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereProjectProviderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereProjectStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereProjectStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereProjectTarget($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereUpdatedAt($value)
 */
	class Project extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ProjectCategory
 *
 * @property int $id
 * @property string $category_name
 * @property string|null $category_description
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Project> $projects
 * @property-read int|null $projects_count
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectCategory whereCategoryDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectCategory whereCategoryName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectCategory whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectCategory whereUpdatedAt($value)
 */
	class ProjectCategory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ProjectFile
 *
 * @property int $id
 * @property int $project_id
 * @property string $file_name
 * @property string|null $file_path
 * @property string|null $file_info
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Project $project
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectFile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectFile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectFile query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectFile whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectFile whereFileInfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectFile whereFileName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectFile whereFilePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectFile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectFile whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectFile whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectFile whereUpdatedAt($value)
 */
	class ProjectFile extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ProjectInvestor
 *
 * @property int $id
 * @property int $project_id
 * @property int $investor_id
 * @property string $filecontract_name
 * @property string $filecontract_path
 * @property string $contribution_amount
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Investor $investor
 * @property-read \App\Models\Project $project
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectInvestor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectInvestor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectInvestor query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectInvestor whereContributionAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectInvestor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectInvestor whereFilecontractName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectInvestor whereFilecontractPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectInvestor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectInvestor whereInvestorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectInvestor whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectInvestor whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectInvestor whereUpdatedAt($value)
 */
	class ProjectInvestor extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ProjectProvider
 *
 * @property int $id
 * @property string $provider_name
 * @property string|null $provider_info
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Project> $projects
 * @property-read int|null $projects_count
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectProvider newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectProvider newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectProvider query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectProvider whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectProvider whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectProvider whereProviderInfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectProvider whereProviderName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectProvider whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectProvider whereUpdatedAt($value)
 */
	class ProjectProvider extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ProjectStatus
 *
 * @property int $id
 * @property string $status_name
 * @property string|null $status_description
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Project> $projects
 * @property-read int|null $projects_count
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectStatus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectStatus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectStatus query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectStatus whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectStatus whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectStatus whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectStatus whereStatusDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectStatus whereStatusName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectStatus whereUpdatedAt($value)
 */
	class ProjectStatus extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Sector
 *
 * @property int $id
 * @property int $sector_category_id
 * @property string $name
 * @property string $slug
 * @property string $anak_perusahaan
 * @property string $description
 * @property string|null $html_content
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Customer> $customers
 * @property-read int|null $customers_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\SectorFeature> $features
 * @property-read int|null $features_count
 * @property-read \App\Models\SectorCategory $sectorCategory
 * @method static \Illuminate\Database\Eloquent\Builder|Sector newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sector newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sector query()
 * @method static \Illuminate\Database\Eloquent\Builder|Sector whereAnakPerusahaan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sector whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sector whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sector whereHtmlContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sector whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sector whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sector whereSectorCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sector whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sector whereUpdatedAt($value)
 */
	class Sector extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SectorCategory
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Sector> $sectors
 * @property-read int|null $sectors_count
 * @method static \Illuminate\Database\Eloquent\Builder|SectorCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SectorCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SectorCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|SectorCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SectorCategory whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SectorCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SectorCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SectorCategory whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SectorCategory whereUpdatedAt($value)
 */
	class SectorCategory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SectorFeature
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $description
 * @property int|null $product_id
 * @property int|null $service_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Sector|null $sector
 * @method static \Illuminate\Database\Eloquent\Builder|SectorFeature newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SectorFeature newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SectorFeature query()
 * @method static \Illuminate\Database\Eloquent\Builder|SectorFeature whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SectorFeature whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SectorFeature whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SectorFeature whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SectorFeature whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SectorFeature whereServiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SectorFeature whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SectorFeature whereUpdatedAt($value)
 */
	class SectorFeature extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Service
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $anak_perusahaan
 * @property string $description
 * @property string|null $html_content
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Customer> $customers
 * @property-read int|null $customers_count
 * @method static \Illuminate\Database\Eloquent\Builder|Service newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Service newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Service query()
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereAnakPerusahaan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereHtmlContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereUpdatedAt($value)
 */
	class Service extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Agent|null $agent
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Permission\Models\Permission> $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Permission\Models\Role> $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Ecommerce\SalesOrder> $salesOrder
 * @property-read int|null $sales_order_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, User> $tempOrder
 * @property-read int|null $temp_order_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User role($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

