<?php


class ControllerSmokeTest extends TestCase
{
    /**
     * @test
     * @group smoke
     * @dataProvider actionsProvider
     */
    public function pageShouldWork($url, $responseCode)
    {
        $this->visit($url)
            ->assertResponseStatus($responseCode);
    }

    public function actionsProvider()
    {
        return [
            ['/home', 200],
            ['/login', 200],
            ['/companies', 200],
            ['/companies/1', 200],
            ['/companies/create', 200],
            ['/companies/1/positions', 200],
            ['/companies/1/positions/1', 200],
            ['/companies/1/positions/create', 200],
            ['/companies/1/questionnaires', 200],
            ['/companies/1/questionnaires/1', 200],
            ['/companies/1/questionnaires/create', 200],
        ];
    }
}
