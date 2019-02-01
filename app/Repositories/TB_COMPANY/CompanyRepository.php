<?php
/**
 * Created by PhpStorm.
 * User: TEAM
 * Date: 10/30/2018
 * Time: 8:48 PM
 */

namespace App\Repositories\TB_COMPANY;

interface CompanyRepository
{
    public function getCompanyById($id);

    public function getCompanyList();

    public function getCompanyListForCustomer();

    public function approveCompany($company_id);

    public function getCompanyFolderLog();
}
